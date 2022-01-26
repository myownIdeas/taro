<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/render-page-for-customer-verification',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
        'uses'=>'CustomerController@renderPageForCustomerVerification', 'as' =>'render-page-for-customer-verification'
    ]
);
Route::post('/merchant-plugin',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
        'uses'=>'CustomerController@create', 'as' =>'merchant-plugin'
    ]
);

Route::get('get-customer-records-by-uuid',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
    'uses'=>'CustomerController@getNumber', 'as' =>'get-customer-records-by-uuid'
    ]
);

Route::post('send-otp-on-mobile',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
    'uses'=>'SmsController@setCodeForMobile', 'as' =>'send-otp-on-mobile'
    ]
);




Route::post('/saveEmail',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
        'uses'=>'EmailSubscriptionController@create', 'as' =>'saveEmail'
    ]
);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
