<?php namespace App;

use App\Services\SpotApi;

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
        /*
        $temp = \DB::select("SELECT * FROM bot WHERE customer_id = ?", [$this->customer->id]);
        if(!isset($temp) || count($temp)==0){
            $temp = [ (object) ['customer_id'=>$this->customer->id, 'minAmount'=>25, 'maxAmount'=>50, 'status'=>'Off']];
            \DB::insert("INSERT INTO bot (customer_id, `minAmount`, `maxAmount`, `status`)
                          VALUES (:customer_id, :minAmount, :maxAmount, :status);", (array) $temp[0]);
        }
        $this->minAmount = $temp[0]->minAmount;
        $this->maxAmount = $temp[0]->maxAmount;
        $this->status = $temp[0]->status;
        */
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
        // update into DB and turn on!
        \DB::update("UPDATE bot SET status='On' WHERE customer_id=?",[$this->customer->id]);

        $this->placeOptions($this->minAmount, $this->maxAmount);
    }

    public function turnOff(){
        if($this->status == 'On'){
            \DB::update("UPDATE bot SET status='Off' WHERE customer_id=?",[$this->customer->id]);
        }
    }

    public function placeOptions($fromAmount=25, $toAmount=50, $positionsNum=self::positionNumPerIteration){
        $options = $this->getOptions();
        $setupOptions = [];

        for($i = 0; $i < $positionsNum && $options !== false; $i++){
            $setupOptions[] = [
                'MODULE'    => 'Positions',
                'COMMAND'   => 'add',
                'product'   => 'regular',
                'customerId'=> $this->customer->id,
                'amount'    => $this->getAmount($fromAmount, $toAmount),
                'position'  => $this->putOrCall(),
                'optionId'  => $options[array_rand($options)]['id']
            ];
        }
        echo json_encode(SpotApi::sendBatch($setupOptions));
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
        if($ans['err'] === 0)
            return $ans['status']['Options'];

        return false;
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
