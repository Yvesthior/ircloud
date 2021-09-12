<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Analyses
    Route::apiResource('analysis', 'AnalysesApiController');
});


Route::post('register', 'Api\\AuthController@register');
Route::post('login', 'Api\\AuthController@login');
