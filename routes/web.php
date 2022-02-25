<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        "username"=>"John Doe"
    ]);
});
Route::get('/users', function () {
    return inertia('Users', [
        "users"=> User::paginate(10)
    ]);
});
Route::get('/settings', function () {
    return inertia('Settings');
});
Route::post('/logout', function () {
    dd(request('foo')." is logout");
});
