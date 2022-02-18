<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        "username"=>"John Doe"
    ]);
});
Route::get('/users', function () {
    sleep(1);
    return inertia('Users',[
        "time"=>now()->toTimeString(),
        "users"=>User::all()->map(fn($user)=>[
            "user"=> $user->name
        ])
    ]);
});
Route::get('/settings', function () {
    return inertia('Settings');
});
Route::post('/logout', function () {
    dd(request('foo')." is logout");
});
