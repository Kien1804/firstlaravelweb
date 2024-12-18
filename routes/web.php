<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return env('MY_NAME');
});

Route::get('/users', function () {
    return 'This is the users page'; 
});

Route::get('/foods', function () {
    return ['sushi', 'sashimi', 'tofu']; 
});

