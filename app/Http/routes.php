<?php

/**
 * The home page
 */
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);