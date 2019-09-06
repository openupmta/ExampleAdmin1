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
Route::get('login','Auth\LoginController@getLogin')->name('login');
Route::post('login','Auth\LoginController@postLogin');
Route::get('logout','Auth\LogoutController@Logout')->name('logout');

Route::group(['prefix' => 'admin','middleware'=>'check'], function ()
{
    Route::get('/', function()
    {
        return view('admins.index');
    });
});

