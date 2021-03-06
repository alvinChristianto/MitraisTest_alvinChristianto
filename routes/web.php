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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'RegistrationController@showFormRegister');
Route::get('/login', 'RegistrationController@getLogin')->name('login');

Route::post('postRegister', 'RegistrationController@postRegister'); 
Route::post('postLogin', 'RegistrationController@postLogin'); 


Route::post('user', 'ApiController@createuser')-> name('createuser');
