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

Route::group(array('prefix' => 'api'), function()
{
  Route::resource('users', 'UserController');
  Route::prefix('admin')->group(function () {
    Route::post('users','UserController@login');
});
});

Route::get('/', function () {
    return redirect('api');
});
