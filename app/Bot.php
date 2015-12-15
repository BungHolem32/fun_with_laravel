<?php namespace App;

use App\Services\SpotApi;

class Bot
{
    const positionNumPerIteration = 2;
    private $customer;
    private $minAmount;
    private $maxAmount;
    private $status;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
        $temp = \DB::select("SELECT * FROM bot WHERE customer_id = ?", [$this->customer->id]);
        if(!isset($temp) || count($temp)==0){
            $temp = [ (object) ['customer_id'=>$this->customer->id, 'minAmount'=>25, 'maxAmount'=>50, 'status'=>'Off']];
            \DB::insert("INSERT INTO bot (customer_id, `minAmount`, `maxAmount`, `status`)
                          VALUES (:customer_id, :minAmount, :maxAmount, :status);", (array) $temp[0]);
        }
        $this->minAmount = $temp[0]->minAmount;
        $this->maxAmount = $temp[0]->maxAmount;
        $this->status = $temp[0]->status;
    }

    public static function create(Customer $customer){
        return new self($customer);
    }

    public function turnOn(){


        dd(\Request::all());
        $toAmount = 50;
        $fromAmount = 25;
        // TODO: send here the minAmount and maxAmount from ajax call.


        // update into DB and turn on!
        // TODO: Fix this Update.
        \DB::update("UPDATE bot SET status='On', minAmount=?, maxAmount=? WHERE customer_id=?",[]);

        $this->placeOptions($fromAmount, $toAmount);
    }

    public function turnOff(){
        // TODO: write turn off update.
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
}
