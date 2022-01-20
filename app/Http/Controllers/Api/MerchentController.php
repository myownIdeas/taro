<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\ApiResponse;
use App\Repository\EmailSubscriberRepo;
use App\Repository\MerchentRepo;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Api;

class MerchentController extends Controller
{
    public $response;
    public $merchantRepo;
    public function __construct(ApiResponse $apiResponse,MerchentRepo $merchentRepo){
        $this->response = $apiResponse;
        $this->merchantRepo = $merchentRepo;
    }
    public function create(Request $request){
        return $this->response->respond(['data'=>[
            'merchent'=>$this->merchantRepo->create($request->all())
        ]]);
    }
}
