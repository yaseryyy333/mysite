<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing;

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

Auth::routes(["verify"=>true]);
route::get('/home','Homecontroller@index')->name('home') ->middleware('verified');
// Route::get('/', function () {
//     return view('welcome');
// });
route::get('',function(){
    return view('welcome');
});
route::get('',function(){
    return "welcome yasser";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
