<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('pijian') -> group(function(){
    /***
     * @Author:wzh
     */
    Route::post('completion','PijianController@completion');//实验答题
    Route::get('pdf','PijianController@pdf');//实验pdf
    Route::post('student','PijianController@student');//学生信息
});

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@dologin'); //admin登录
    Route::post('register', 'AdminController@register'); //admin注册
    Route::get('login1', 'UserController@dologin'); //user登录
    Route::post('register1', 'UserController@register'); //user注册
});

Route::prefix('shiyan1')->group(function (){
    /**
     * @Author: yjx
     */
    Route::post('shiyan1','Shiyan1Controller@shiyan1');//箱式直流电桥测量电阻实验答题
    Route::get('pdf1','Shiyan1Controller@pdf1');//箱式直流电桥测量电阻实验pdf
});
