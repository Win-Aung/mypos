<?php

Route::prefix('dashbaord')->name('dashboard.')->group(function(){

    Route::get('/index','DashboardController@index')->name('index');
    // Route::resource('/index','DashboardController');
  
});
