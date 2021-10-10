<?php

use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[NoticeController::class,'homeNotice']);
Route::get('/home',[NoticeController::class,'homeNotice']);

Route::get('deptNotice/{department}',[NoticeController::class,'deptNotice']);


//auth start
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/registration', function () {
    return view('auth/registration');
});
Route::post('/registration',[UserController::class,'registration']);

Route::get('/forgotPass', function () {
    return view('auth/forgetPass');
});
Route::get('/resetPass', function () {
    return view('auth/resetPass');
});
// auth close

// admin
Route::get('/createNotice', function () {
    return view('admin/createNotice');
});
Route::post('/createNotice',[NoticeController::class,'createNotice']);

Route::get('/editNotice', function () {
    return view('admin/noticeList');
});

