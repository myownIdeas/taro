<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\ApiResponse;
use App\Repository\EmailSubscriberRepo;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Api;

class EmailSubscriptionController extends Controller
{
    public $response;
    public $emailSubscriber;
    public function __construct(ApiResponse $apiResponse,EmailSubscriberRepo $emailSubscriberRepo){
        $this->response = $apiResponse;
        $this->emailSubscriber = $emailSubscriberRepo;
    }
    public function create(Request $request){
       $this->response->respond(['data'=>[
           'email'=>$this->emailSubscriber->create($request->all())
       ]]);
    }
}
