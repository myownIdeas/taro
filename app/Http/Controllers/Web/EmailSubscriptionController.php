<?php

namespace App\Http\Controllers\Web;


use App\EmailSubscriber;
use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\WebResponse;
use Illuminate\Http\Request;

class EmailSubscriptionController extends Controller
{
    public $response;
    public function __construct(WebResponse $webResponse)
    {
        $this->response = $webResponse;
    }


    public function getSubscribeEmails(Request $request){
        return $this->response->setView("admin.pages.subscribe_email")->respond(["data"=>[
            "emails"=>EmailSubscriber::all()
        ]]);

    }
}
