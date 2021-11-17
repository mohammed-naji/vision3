<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return 'Homepage';
});

Route::get('about', function() {
    return 'About Page';
});

Route::get('team', function() {
    return 'Team Page';
});

Route::get('Services', function() {
    return 'Services Page';
});

Route::get('contact', function() {
    return 'contact Page';
});

Route::get('user', function() {
    return 'User Page';
});

Route::get('user/profile/main', function() {
    return 'profile Page';
});

Route::get('student/{name?}/{age?}', function($name = '', $age = '') {
    return 'Welcome ' . $name . ' ' . $age;
});

// Routes Type
// Route::get('route_url', 'Action');
// Route::post('route_url', 'Action');
// Route::put('route_url', 'Action');
// Route::patch('route_url', 'Action');
// Route::delete('route_url', 'Action');
