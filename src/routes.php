<?php

Route::group(['namespace' => 'Drivezy\LaravelAdmin\Controllers',
              'prefix'    => 'api/record'], function () {

    Route::resource('module', 'ModuleController');
    Route::resource('menu', 'MenuController');
    Route::resource('moduleMenu', 'ModuleMenuController');

    Route::get('menuDetails/{id}', 'MenuController@getMenuDetails');
    Route::get('menus', 'MenuController@getMenus');
});