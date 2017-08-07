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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'LoginController@doLogin');

Route::get('/account/sign-out', array(
  'as' => 'account-sign-out',
  'uses' => 'LoginController@getSignOut'
));

Route::get('verTodasOs', array(
  'as' => 'verTodasOs',
  'uses' => 'DashboardController@admin'
));

Route::post('/outro', array(
  'as' => 'outro',
  'uses' => 'LogInController@outro'
));


Route::resource('ficha', 'DashboardController');

Route::get('/dashboard', array(
  'as' => 'dashboard',
  'uses' => 'DashboardController@dash'
));
