<?php
header('Access-Control-Allow-Origin: *');

Route::group(['prefix' => 'api/v1'], function() {
    Route::post('/register', 'Auth\AuthController@postRegister');
    Route::post('/login', 'Auth\AuthController@authenticate');

    // Apartments
    Route::get('apartments', 'ApartmentController@index');
    Route::get('apartments/{identifier}', 'ApartmentController@show');

    // Reviews
    Route::get('reviews', 'UserReviewController@index');
    Route::get('reviews/{identifier}', 'UserReviewController@show');

    // Apartment reviews
    Route::get('/apartments/{identifier}/reviews', 'ApartmentReviewController@index');
    
    // Routes protected with JWT
    Route::group(['middleware' => ['jwt.auth']], function () {
        // Apartments
        Route::post('apartments/create', 'ApartmentController@store');
        Route::delete('apartments/delete/{id}', 'ApartmentController@destroy');
        Route::patch('apartments/update/{id}', 'ApartmentController@update');

        // Apartment Reviews
        Route::post('apartment_reviews/create', 'ApartmentReviewController@store');
        Route::delete('apartment_reviews/delete/{id}', 'ApartmentReviewController@destroy');
        Route::patch('apartment_reviews/update/{id}', 'ApartmentReviewController@update');

        // User Reviews
        Route::post('user_reviews/create', 'UserReviewController@store');
        Route::delete('user_reviews/delete/{id}', 'UserReviewController@destroy');
        Route::patch('user_reviews/update/{id}', 'UserReviewController@update'); 
    });
});
