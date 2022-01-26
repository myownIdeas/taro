<?php

namespace App\Helpers;

use App\Customers;

class GlobalHelper
{
    public static function getCustomerIdByUuid($uuid){
        return Customers::where('uuid',$uuid)->value('id');
    }
}
