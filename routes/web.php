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

Route::get('user/profile', [function(){
	echo "profile";
}]);



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', [
    'uses'=>'personController@index'
    ]);

Route::post('/login', [
    'uses'=>'personController@userLogin'
    ]);

Route::get('/home', [
    'uses'=>'personController@home'
    ]);

Route::post('/sendOtp', [
    'middleware' => 'checkSession',
    'uses'=>'personController@sendOtp'
]);

Route::post('/verifyOtp', [
    'middleware' => 'checkSession',
    'uses'=>'personController@verifyOtp'
]);

Route::get('/logout', [
    'uses'=>'personController@logout'
    ]);

Route::get('/fileuploadform', 'PagesController@index');
Route::post('/uploadFile', 'PagesController@uploadFile');

