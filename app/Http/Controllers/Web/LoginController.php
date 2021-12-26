<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Responses\Responses\WebResponse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public $response;
    public function __construct(WebResponse $webResponse)
    {
        $this->response = $webResponse;
    }
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){

        $user = User::where('email',$request->get('email'))->where('password',md5($request->get('password')))->exists();
        if($user){
            return \Redirect('admin/dashboard');
        }else{
            return \Redirect('admin/login');
        }
    }

    public function dashboard(Request $request){
        return $this->response->setView("admin.pages.dashboard")->respond(["data"=>[

        ]]);
    }
}
