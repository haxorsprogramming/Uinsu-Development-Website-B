<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'C_Home@home');
Route::get('/about', 'C_Home@about');
Route::get('/news/', 'News');
