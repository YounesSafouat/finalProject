<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/tt',function(){
    return    view('pay');
});


Route::post('/auth/login', [BasicController::class, 'storeLog']);
Route::post('/auth/register', [BasicController::class, 'storeRegi']);
Route::get('/courses/all/{user}',[BasicController::class,'index1'])->name('allCourse');
Route::get('/courses/{user}/add',[BasicController::class,'createcourse'])->name('createcourse');
Route::post('/courses/{user}/add',[BasicController::class,'storecourse'])->name('storecourse');
Route::get('/courses/{user}/add/{course}/lesson',[BasicController::class,'createlesson'])->name('createlesson');
Route::post('/courses/{user}/add/{course}/lesson',[BasicController::class,'storelesson'])->name('storelesson');
Route::get('/course/payment/{user}/{id}',[BasicController::class,'creatPay'])->name('creatPay');
Route::post('/course/payment/{user}/{id}',[BasicController::class,'storePay'])->name('storePay');
Route::get('/courses/{user}/watch/{id}',[BasicController::class,'show'])->name('watch');
Route::get('/courses/show/{user}',[BasicController::class,'index2'])->name('myCourses');
Route::get('/courses/payment/{user}',[BasicController::class,'index3'])->name('payment');
Route::get('/courses/profile/{user}',[BasicController::class,'index4'])->name('profile');
Route::get('/auth',[BasicController::class,'index'])->name('auth');
Route::get('/',[BasicController::class,'index'])->name('auth');
Route::get('/home',[BasicController::class,'index'])->name('auth');

