<?php
/**
 * Created by PhpStorm.
 * User: Muhammad.Waqas
 * Date: 22/12/2021
 * Time: 9:35 PM
 */

namespace App\Repository;


use App\Customers;
use App\EmailSubscriber;
use App\Merchant;
use Illuminate\Support\Str;

class CustomerRepo
{
    public function makeParams($inputs){
       return [
           'customer_uuid'=>Str::uuid(),
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
        return  $this->mapOutSide(Customers::create($this->makeParams($params))->toArray());
    }

    public function createCustomerWithMobile($params){
        $customer =[
            'uuid'=>Str::uuid(),
            'number'=>$params['number'],
            'mobile_otp'=>$params['code']
        ];
        return $this->getCustomerByUUID(Customers::create($customer)->uuid);
    }
    public function getCustomerByUUID($uuid){
       return $this->mapOutSide(Customers::where('uuid',$uuid)->first());
    }
    public function updateOtpCode($params){

    }

    public function mapOutSide($record){

       return  [
                'uuid'=>$record['uuid'],
                'first_name'=>$record['first_name'],
                'last_name'=>$record['last_name'],
                'shipping_address1'=>$record['shipping_address1'],
                'email'=>$record['email'],
                'shipping_city'=>$record['shipping_city'],
                'number'=>$record['number'],
                'mobileCode'=>$record['mobile_otp'],
                //'return_url'=>asset('/').'render-page-for-customer-verification?uuid='.$record['customer_uuid']
            ];
    }
}
