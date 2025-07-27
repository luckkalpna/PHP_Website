<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::view("/about", "about");
Route::view("userform", "user-form");

Route::get("user", [UserController::class, 'getUser']);
Route::get("user/{name}", [UserController::class, 'getUserName']);
Route::get("admin-login", [UserController::class, 'adminLogin']);

Route::post("adduser", [UserController::class, "addUser"]);

Route::get("users", [UserController::class, "users"]);
