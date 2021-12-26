<?php
/**
 * Created by PhpStorm.
 * User: Muhammad.Waqas
 * Date: 22/12/2021
 * Time: 9:35 PM
 */

namespace App\Repository;


use App\EmailSubscriber;
use Illuminate\Support\Str;

class EmailSubscriberRepo
{
    public function makeParams($inputs){
       return [
            'subscribe_email_uuid'=>Str::uuid(),
            'email'=>$inputs['email']
        ];
    }

    public function create($params){
        return  EmailSubscriber::create($this->makeParams($params));
    }
}