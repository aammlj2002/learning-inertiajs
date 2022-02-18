<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        "username"=>"John Doe"
    ]);
});
Route::get('/users', function () {
    sleep(1);
    return inertia('Users',[
        "time"=>now()->toTimeString()
    ]);
});
Route::get('/settings', function () {
    return inertia('Settings');
});
Route::post('/logout', function () {
    dd(request('foo')." is logout");
});
