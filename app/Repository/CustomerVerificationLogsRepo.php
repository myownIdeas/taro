<?php

namespace App\Repository;

use App\Helpers\GlobalHelper;
use App\Models\CustomersLogs;

class CustomerVerificationLogsRepo
{
    public function createCustomerVerificationLogs($params){
        return CustomersLogs::create($this->makeParams($params));
    }

    public function makeParams($params){
        return [
          'customer_id'=>GlobalHelper::getCustomerIdByUuid($params['uuid']),
          'mobile'=>$params['number'],
          'otp'=>$params['mobileCode']
        ];

    }
}
