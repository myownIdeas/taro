<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\ApiResponse;
use App\Repository\SmsVerification;
use App\Repository\SmsVerificationRepo;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public $response='';
    public $smsVerification='';
    public function __construct(ApiResponse $apiResponse,SmsVerificationRepo $smsVerification){
        $this->response = $apiResponse;
        $this->smsVerification = $smsVerification;
    }
    public function setCodeForMobile(Request $request){
        $status = $this->smsVerification->smsVerification($request->all());
        return $this->response->respond(['data'=>[
            'sent'=>$status
        ]]);
    }
}
