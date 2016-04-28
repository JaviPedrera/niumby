<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses'			=>	'GeneralController@home',
	'as'			=>	'home',
	'middleware'	=>	['guest','web'],
]);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/apartments', 'ApartmentController@index');
    Route::get('/apartment/{apartment_name}', 'ApartmentController@getApartmentByName');

    Route::group(['middleware' => 'auth'], function () {
    	
    	Route::get('/apartment/create', [
            'uses' => 'ApartmentController@create',
            'as'   => 'apartment.create'
    	]);

    	Route::get('/apartment/edit', [
            'uses' => 'ApartmentController@edit',
            'as'   => 'apartment.edit',
    	]);
		    	
    	Route::get('/apartment/my_apartments', [
            'uses' => 'ApartmentController@dashboard',
            'as'   => 'apartment.dashboard',
    	]);

    	Route::post('/apartment/create', [
            'uses' => 'ApartmentController@store',
            'as'   => 'apartment.store',
    	]);
    });
});
