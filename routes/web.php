<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TagController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']], function(){
    
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('tag', TagController::class);
    


});
Route::group(['as'=>'author.','prefix'=>'author','middleware'=>['auth','author']], function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


});
Route::get('/logout',[DashboardController::class,'logout']);
