<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

  Route::get('/', function () {
    return view('auth.login');
});
  
    Route::auth();


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');
    Route::resource('directories','DirectoriesController');
    Route::get('/search', 'PagesController@getsearch');
    Route::get('company/{companies}', 'CompaniesController@index');
    Route::get('status/{statuses}', 'StatusesController@index');
    Route::get('reports','PagesController@report');
    Route::get('exportPDF','PagesController@exportPDF');


    Route::resource('users','UserController');
 Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]); 

    
});


