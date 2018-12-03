<?php

use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/home', 'IndexController@index');

Route::get('/profile/{identifier}', 'ProfileController@exibirProfile');
Route::post('/profile/{identifier}', 'ProfileController@updateProfile');

Route::get('/equipe', 'FaqController@quemSomos');

Route::get('/faq', 'FaqController@exibir');

Route::get('/descubra', 'FaqController@start');

Route::get('/logout','Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
