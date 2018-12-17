<?php

Route::get('expenses', 'ExpenseController@index');
Route::get('expenses/{expense}', 'ExpenseController@show');
Route::post('expenses', 'ExpenseController@store');
Route::put('expenses/{expense}', 'ExpenseController@update');
Route::delete('expenses/{expense}', 'ExpenseController@delete');

Route::get('categories', 'CategoryController@index');
Route::get('categories/{category}', 'CategoryController@show');
Route::post('categories', 'CategoryController@store');
Route::put('categories/{category}', 'CategoryController@update');
Route::delete('categories/{category}', 'CategoryController@delete');