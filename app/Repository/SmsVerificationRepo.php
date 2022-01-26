<?php

namespace App\Repository;

class SmsVerificationRepo
{
    public $customerVerificationLogs='';
    public $customerRepo;
    public function __construct(CustomerVerificationLogsRepo $customerVerificationLogs,CustomerRepo $customerRepo){
       $this->customerVerificationLogs = $customerVerificationLogs;
       $this->customerRepo = $customerRepo;
    }
    public function smsVerification($params){
        $code = $this->generateCode();
        $params['code'] = $code;
        $customer = $this->customerRepo->createCustomerWithMobile($params);
        $this->customerVerificationLogs->createCustomerVerificationLogs($customer);
        return $this->sendSmsWithCode($code);
    }

    public function generateCode(){
        return 0342;
    }

    public function sendSmsWithCode($params){

        $this->customerRepo->updateOtpCode($params);
        return true;
    }
}
