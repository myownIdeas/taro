<?php
/**
 * Created by PhpStorm.
 * User: Muhammad.Waqas
 * Date: 22/12/2021
 * Time: 9:35 PM
 */

namespace App\Repository;


use App\EmailSubscriber;
use App\Merchant;
use Illuminate\Support\Str;

class MerchentRepo
{
    public function makeParams($inputs){
       return [
            'x_customer_first_name'=>(isset($inputs['x_customer_first_name']))?$inputs['x_customer_first_name']:null,
            'x_customer_last_name'=>(isset($inputs['x_customer_last_name']))?$inputs['x_customer_last_name']:null,
            'x_customer_shipping_address1'=>(isset($inputs['x_customer_shipping_address1']))?$inputs['x_customer_shipping_address1']:null,
            'x_customer_email'=>(isset($inputs['x_customer_email']))?$inputs['x_customer_email']:null,
            'x_customer_shipping_city'=>(isset($inputs['x_customer_shipping_city']))?$inputs['x_customer_shipping_city']:null,
            'x_currency'=>(isset($inputs['x_currency']))?$inputs['x_currency']:null,
            'x_amount'=>(isset($inputs['x_amount']))?$inputs['x_amount']:null,
            'x_account_id'=>(isset($inputs['x_account_id']))?$inputs['x_account_id']:null,
            'x_reference'=>(isset($inputs['x_reference']))?$inputs['x_reference']:null,
            'x_test'=>(isset($inputs['x_test']))?$inputs['x_test']:null,
        ];
    }

    public function create($params){
        return  $this->mapOutSide(Merchant::create($this->makeParams($params))->toArray());
    }

    public function mapOutSide($record){

       return  [
                'x_customer_first_name'=>$record['x_customer_first_name'],
                'x_customer_last_name'=>$record['x_customer_last_name'],
                'x_customer_shipping_address1'=>$record['x_customer_shipping_address1'],
                'x_customer_email'=>$record['x_customer_email'],
                'x_customer_shipping_city'=>$record['x_customer_shipping_city'],
                'x_currency'=>$record['x_currency'],
                'x_amount'=>$record['x_amount'],
                'x_account_id'=>$record['x_account_id'],
                'x_reference'=>$record['x_reference'],
                'x_test'=>$record['x_test'],
            ];
    }
}
