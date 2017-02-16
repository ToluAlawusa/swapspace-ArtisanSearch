<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function (){
    Route::get('/', function (){
        return view('index');
    })->name('index');

    Route::get('/adminregister', [
        'uses' => 'AdminRegister@showAdminRegister',
        'as' => 'adminregister'
    ]);

    Route::post('/adminregister', [
        'uses' => 'AdminRegister@doAdminRegister',
        'as' => 'adminregister'
    ]);
    
});
