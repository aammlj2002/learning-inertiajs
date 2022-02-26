<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get("/login", [LoginController::class, "create"])->name("login");
Route::post("/login", [LoginController::class, "store"]);
Route::post("/logout", [LoginController::class, "destroy"])->name("logout")->middleware("auth");

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return inertia('Home', [
            "username"=>"John Doe"
        ]);
    });
    Route::get('/users', function () {
        return inertia('Users/Index', [
            "users"=> User::query()
            ->when(Request::input("search"), function ($query, $search) {
                $query->where("name", "LIKE", "%$search%");
            })
            ->paginate(10)
            ->withQueryString()
            ->through(fn ($user) =>[
                "id"=>$user->id,
                "name"=>$user->name
            ]),
            "filters"=>Request::only('search')
        ]);
    });
    Route::get("/users/create", function () {
        return inertia("Users/Create");
    });
    Route::post('/users', function () {
        // validate
        $validation = Request::validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);
        User::create($validation);
        return redirect("/users/create");
    });
    Route::get('/settings', function () {
        return inertia('Settings');
    });
});
