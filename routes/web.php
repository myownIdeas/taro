<?php

use Illuminate\Support\Facades\Route;


//Route::get('/mobile-verification',
//    [
//        'middleware'=>
//            [
//                // 'webValidate:loginRequest'
//            ],
//        'uses'=>'MerchentController@mobileScreen', 'as' =>'mobile-verification'
//    ]
//);

Route::get('/login',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
        'uses'=>'LoginController@index', 'as' =>'login'
    ]
);

Route::post('/login',
    [
        'middleware'=>
            [
                // 'webValidate:loginRequest'
            ],
        'uses'=>'LoginController@login', 'as' =>'login'
    ]
);

Route::middleware(['AdminAuth'])->prefix('admin')->group(function(){

 Route::get('/dashboard',
        [
            'middleware'=>
                [
                    // 'webValidate:loginRequest'
                ],
            'uses'=>'LoginController@dashboard', 'as' =>'dashboard'
        ]
    );

    Route::get('/subscribe-emails',
        [
            'middleware'=>
                [
                    // 'webValidate:loginRequest'
                ],
            'uses'=>'EmailSubscriptionController@getSubscribeEmails', 'as' =>'subscribe-emails'
        ]
    );
});





Route::get('/{path?}', [
    'uses' => 'HomeController@index',
    'as' => 'home',
    'where' => ['path' => '.*']
]);
