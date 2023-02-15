<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;

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
// login & register
Route::redirect('/','loginPage');
Route::get('loginPage',[AuthController::class,'loginPage'])->name('auth#loginPage');
Route::get('registerPage',[AuthController::class,'registerPage'])->name('auth#registerPage');

//dashboard
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');
//route lead to admin home
// Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::group(['prefix'=>'category','middleware'=>'admin_auth'],function(){
        Route::get('list',[TopicController::class,'list'])->name('admin#listPage');
        Route::get('createPage',[TopicController::class,'createPage'])->name('list#createPage');
        Route::post('create',[TopicController::class,'create'])->name('list#createTopic');
        Route::get('delete/{id}',[TopicController::class,'delete'])->name('list#deleteTopic');
    });
// });

//route to user home
Route::group(['prefix'=>'user','middleware'=>'user_auth'],function(){
    Route::get('home',function(){
        return view('user.home');
    })->name('user#homePage');
});


//route to speaker home
Route::group(['prefix'=>'speaker','middleware'=>'speaker_auth'],function(){
    Route::get('index',function(){
        return view('speaker.index');
    })->name('speaker#homePage');
});
