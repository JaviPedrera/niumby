<?php

Route::group(['prefix' => 'api/v1'], function() {
    Route::post('/register', 'AuthenticateController@register');
    Route::post('/login', 'AuthenticateController@authenticate');

    // Apartments
    Route::get('apartments', 'ApartmentApiController@index');
    Route::get('apartments/{identifier}', 'ApartmentApiController@show');

    // Reviews
    Route::get('reviews', 'ReviewApiController@index');
    Route::get('reviews/{identifier}', 'ReviewApiController@show');

    // Apartment reviews
    Route::get('/apartments/{identifier}/reviews', 'ApartmentReviewController@index');
    
    // Routes protected with JWT
    Route::group(['middleware' => ['jwt.auth']], function () {
        // Apartments
        Route::post('apartments/create', 'ApartmentApiController@store');
        Route::delete('apartments/delete', 'ApartmentApiController@destroy');
        Route::patch('apartments/update', 'ApartmentApiController@update');

        // Reviews
        Route::post('reviews/create', 'ReviewApiController@store');
        Route::delete('reviews/delete', 'ReviewApiController@destroy');
        Route::patch('reviews/update', 'ReviewApiController@update');  
    });
});
