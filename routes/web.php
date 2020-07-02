<?php

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/signup', 'User\UserController@signupView')->name('user.signupView');
Route::post('user/signup', 'User\UserController@createAccount')->name('user.createAccount');
Route::post('user/login', 'User\UserController@login')->name('user.login');

Route::group(['middleware' => ['auth']], function () {
	Route::get('user/dashboard', 'User\UserController@dashboard')->name('user.dashboard');
	Route::post('product/upload', 'Product\ProductController@create')->name('product.create');
});
