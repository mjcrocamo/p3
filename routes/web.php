<?php
/*
 * Home page and route for searching for a pirate name
 */
Route::get('/', 'PirateController@index');
Route::get('/nameProcess', 'PirateController@nameProcess');
