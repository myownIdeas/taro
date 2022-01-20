<?php

namespace App\Http\Controllers\Web;


use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\ApiResponse;
use App\Http\Responses\Responses\WebResponse;
use App\Repository\EmailSubscriberRepo;
use App\Repository\MerchentRepo;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Api;

class MerchentController extends Controller
{
    public $response;
    public $merchantRepo;
    public function __construct(WebResponse $webResponse,MerchentRepo $merchentRepo){
        $this->response = $webResponse;
        $this->merchantRepo = $merchentRepo;
    }
    public function create(Request $request){
        return $this->response->setView("merchant.merchant")->respond(["data"=>[
            'merchant'=>$this->merchantRepo->create($request->all())
        ]]);
    }

    public function mobileScreen(Request $request){

        return $this->response->setView("merchent.mobile_verification")->respond(["data"=>[
            'mobile'=>'03484504056'
        ]]);
    }
}
