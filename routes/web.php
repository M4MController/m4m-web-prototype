<?php

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
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'MainController@mainPage');
Route::get('/test', 'MainController@test');
Route::get('/office', 'OfficeController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/object/update/json', 'ObjectController@updateJson');
Route::post('/object/update/add', 'ObjectController@addController');
Route::post('/object/save', 'ObjectController@saveController');
Route::get('/finance', 'MainController@finance');
Route::get('/settings', 'MainController@settings');
Route::get('/payment', 'MainController@payment');
Route::get('/support', 'MainController@support');
Route::get('/entity/{id}', 'MainController@entity');
