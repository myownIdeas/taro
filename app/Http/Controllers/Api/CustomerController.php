<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\ApiResponse;
use App\Repository\EmailSubscriberRepo;
use App\Repository\CustomerRepo;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Api;

class CustomerController extends Controller
{
    public $response;
    public $customerRepo;
    public function __construct(ApiResponse $apiResponse, CustomerRepo $customerRepo){
        $this->response = $apiResponse;
        $this->customerRepo = $customerRepo;
    }
    public function create(Request $request){
        return $this->response->respond(['data'=>[
            'customer'=>$this->customerRepo->create($request->all())
        ]]);
    }

    public function renderPageForCustomerVerification(Request $request){
        dd($request->all());
    }

    public function getNumber(Request $request){
        return $this->response->respond(['data'=>[
            'number'=>'03484504056'
        ]]);
    }
}
