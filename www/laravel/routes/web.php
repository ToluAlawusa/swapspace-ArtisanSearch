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

    Route::get('/adminlogin', [
        'uses' => 'AdminLogin@showAdminLogin',
        'as' => 'adminlogin'
    ]);

     Route::post('/adminlogin', [
        'uses' => 'AdminLogin@doAdminLogin',
        'as' => 'adminlogin'
    ]);

    Route::get('/addcategory', [
        'uses' => 'AddCategory@showAddCategory',
        'as' => 'addcategory'
    ]);

    
    Route::post('/addcategory', [
        'uses' => 'AddCategory@doAddCategory',
        'as' => 'addcategory'
    ]);

    Route::get('/viewcategory', [
        'uses' => 'ViewCategory@showViewCategory',
        'as' => 'viewcategory'
    ]);

    Route::get('/editcategory/{id}/', [
        'uses' => 'EditCategory@showEditCategory',
        'as' => 'editcategory'
    ]);

    Route::post('/editcategory/{id}/', [
        'uses' => 'EditCategory@doEditCategory',
        'as' => 'editcategory'
    ]);

    Route::get('/deletecategory/{id}/', [
        'uses' => 'DeleteCategory@doDeleteCategory',
        'as' => 'deletecategory'
    ]);

    Route::get('/admindashboard', [
        'uses' => 'AdminDashboard@showDashboard',
        'as' => 'admindashboard'
    ]);

    Route::get('/previewstatement/{id}/', [
	    'uses' => 'PreviewStatement@showPreviewStatement',
	    'as' => 'previewstatement'
    ]);

    Route::post('/previewstatement/{id}/', [
        'uses' => 'PreviewStatement@doPublishStatement',
        'as' => 'previewstatement'
    ]);

    Route::get('/deletestatement/{id}/', [
        'uses' => 'DeleteStatement@doDeleteStatement',
        'as' => 'deletestatement'
    ]);


	Route::get('/adminlogout', [
	    'uses' => 'AdminLogout@doAdminLogout',
	    'as' => 'adminlogout'
	]);
    
});
