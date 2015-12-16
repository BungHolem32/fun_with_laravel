<?php namespace App;

use App\Services\SpotApi;
use Log;

class Bot
{
    const positionNumPerIteration = 2;
    const defaultMin = 25;
    const defaultMax = 50;
    private $customer;
    private $minAmount;
    private $maxAmount;
    private $status;

    public function __construct(Customer $customer, $forceSetup=true)
    {
        $this->customer = $customer;

        foreach($customer->getBotSettings() as $k=>$v){
            $this->{$k} = $v;
        }
        if(!$this->status && $forceSetup){
            $this->setDefaultSettings();
        }
    }

    public static function create(Customer $customer, $forceSetup =true){
        return new self($customer, $forceSetup);
    }

    public function setRange($min, $max){
        return \DB::update("UPDATE bot SET `minAmount`=?, `maxAmount`=? where customer_id=?", [$min, $max, $this->customer->id]);
    }

    public function turnOn(){
        \DB::update("UPDATE bot SET status='On' WHERE customer_id=?",[$this->customer->id]);
        return $this->placeOptions($this->minAmount, $this->maxAmount);
    }

    public function turnOff(){
        $err = '';
        if($this->status == 'On'){
            $r = \DB::update("UPDATE bot SET status='Off' WHERE customer_id=?",[$this->customer->id]);
            if($r !== 1){
                $err = 'update failed.';
            }
        }else{
            $err = 'notOn';
        }
        return ['err' => ($err ? 1 : 0), 'errs'=>['error'=>$err]];
    }

    public function placeOptions($fromAmount=25, $toAmount=50, $positionsNum=self::positionNumPerIteration){
        try{
            $options = $this->getOptions();
        }catch(\Exception $e){
            return ['err' => 1, 'errs'=>['error'=>'failed to retrieve options']];
        }

        $current_ids = array_map(function($a){return $a['id'];}, $this->getCurrentPositions());
        $setupOptions = [];

        for($i = 0; $i < $positionsNum && $options !== false; $i++){
            $check_limit = 0;
            while(($option = $options[array_rand($options)]) && ++$check_limit < 25){
                if(!in_array($option['id'], $current_ids))
                    break;
                Log::info('skipping option which customer already holds', $option);
            }
            Log::info('selected option', $option);
            $setupOptions[] = [
                'MODULE'    => 'Positions',
                'COMMAND'   => 'add',
                'product'   => 'regular',
                'customerId'=> $this->customer->id,
                'amount'    => $this->getAmount($fromAmount, $toAmount),
                'position'  => $this->putOrCall(),
                'optionId'  => $option['id']
            ];
        }
        return SpotApi::sendBatch($setupOptions);
    }

    private function getAmount($fromAmount, $toAmount){
        $rest = rand(0, 99) / 100;               // 0.56, 0.88...
        $amount = rand($fromAmount, $toAmount);  // 27, 43...
        $total = $amount + $rest;                // 27.56, 43.88...
        return $total;
    }

    private function putOrCall(){
        if(rand(0, 100) > 50)
            return 'call';
        return 'put';
    }

    /**
     * @return array
     * @throws \Exception
     */
    private function getOptions(){
        $startDate = date('Y-m-d H:i', (time() + (2*604800))); // 2 weeks.
        $endDate   = date('Y-m-d H:i', (time() + (4*604800))); // 4 weeks.

        //echo $startDate .' - '. $endDate;

        $data['FILTER']['endDate']['min']   = $startDate;
        $data['FILTER']['endDate']['max']   = $endDate;
        $data['FILTER']['status']           = 'open';
        $data['FILTER']['vipGroup']         = 'regular';
        $data['FILTER']['product']          = 'regular';
        //$data['LFILTER']['assetId'] = 2;
        //$data['LFILTER']['Assets']['type'] = 'currencies';

        $ans = SpotApi::sendRequest('Options', 'view', $data);
        //echo json_encode($ans);
        if($ans['err'] !== 0) {
            Log::error('Error getting options list from spot', (array)$ans);
            throw new \Exception('Failed to retrieve options');
        }

        return $ans['status']['Options'];
    }

    public function getCurrentPositions(){
        // Get Customer Positions.
        $positionsData['FILTER']['customerId']= Customer::get()->id;
        $data['FILTER']['status'] = 'open';
        $p = SpotApi::sendRequest('Positions', 'view', $positionsData);
        if(array_key_exists('Positions', $p['status'])){
            return $p['status']['Positions'];
        }
        return [];
    }

    protected function setDefaultSettings($save = true){
        $settings = ['customer_id'=>$this->customer->id, 'minAmount'=>self::defaultMin, 'maxAmount'=>self::defaultMax, 'status'=>'Off'];
        if($save){
            \DB::insert('insert into `bot` (`customer_id`, `minAmount`, `maxAmount`,`status`) values (:customer_id, :minAmount, :maxAmount, :status)', $settings);
        }
        foreach($settings as $k=>$v){
            $this->{$k} = $v;
        }
        return $this;
    }
}
