<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'C_Home@home');
Route::get('/about', 'C_Home@about');
Route::get('/academic', 'C_Home@academic');
Route::get('/news/{$kd_news}', 'C_News@news_details');
