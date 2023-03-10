<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\foodController;
use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome',['groupName'=>'Group five ']);
});
Route::get('/', function () {
    return view('welcome',['groupName'=>'Group five ']);
});
Route::get('/', function () {
    return view('welcome')->with('groupName','Group five ');
});

//Food controller 
Route::group(['prefix'=>'foods'], function () {
    
    Route::get('/seeFood', [foodController::class,'index']);
    Route::post('/storeFood', [foodController::class,'store']);
    Route::get('/addFood', [foodController::class,'create']);
    Route::delete('/deleteFood/{id}', [foodController::class, 'distroy']);
});


//Order controller
Route::group(['prefix'=>'foods'], function () {

    Route::get('/orderFood/{id}',[orderController::class, 'create']);
    Route::get('/orderFoodo/{id}',[orderController::class, 'createb'])->where('id','[0-9]+');
    Route::post('/storeOrder', [orderController::class, 'store']);
    Route::get('/seeOrdered', [orderController::class, 'index']);
    Route::get('/details/{id}', [orderController::class, 'details']);
    Route::delete('/deleteOrder/{id}', [orderController::class, 'distroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
