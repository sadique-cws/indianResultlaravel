<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix("admin")->middleware("auth")->group(function(){
    Route::get("/",[AdminController::class,"home"])->name("admin.dashboard");
    Route::resource("school",SchoolController::class);
    Route::resource("student",App\Http\Controllers\StudentController::class);
});

Route::prefix("school")->group(function(){
    Route::get("/",[SchoolController::class,"home"])->name("school.dashboard")->middleware("schoolAuth");
    Route::match(["get","post"],"/insertResult",[SchoolController::class,"insertResult"])->name("school.insertResult")->middleware("schoolAuth");
    Route::get("/login",[SchoolController::class,"login"]);
    Route::get("/Logout",[AuthController::class,"schoolLogout"])->name("school.logout");
    Route::post("/login",[AuthController::class,"schoolLogin"])->name("school.login");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';