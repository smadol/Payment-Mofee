<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
/*************支付服务***************/
Route::post('gateway.do','api/Gateways/gateway');


/***********************************/
//Admin
Route::rule('admin/login','admin/entry/login','POST|GET');
Route::get('admin/order','admin/index/order');
Route::get('admin/settle','admin/index/settle');

//API
Route::get('api/getnews','index/index/getNotice');
Route::get('api/sendcode','index/Base/sendValiCode'); //发送验证码

//Index

Route::get('pcPay','index/Index/pcPay');
Route::get('phonePay','index/Index/phonePay');
Route::get('scanPay','index/Index/scanPay');
Route::get('cardPay','index/Index/cardPay');

//帮助系统
Route::group('support',function (){
    Route::get('/doc','index/Support/document');
    Route::get('/sdkDownload','index/Support/sdk');
    Route::get('/help','index/Support/help');
});


//用户系统
Route::rule('user/','user/user/index');
Route::rule('user/fund/apply','user/user/apply');
Route::rule('user/fund/settlement','user/user/settle');
Route::rule('user/verify','user/user/verify');
Route::rule('user/trade','user/user/trade');

Route::rule('user/account','user/user/account');
Route::rule('user/account/api_cert','user/user/security');
//入口相关
Route::rule('user/login','user/index/index');
Route::post('user/dologin','user/entry/login');
Route::rule('user/logout','user/entry/logout');
Route::rule('user/showAuthCode','user/user/checkAuthCode');

//申请商户
Route::get('regon','user/index/register');
Route::post('regin','user/entry/register');

