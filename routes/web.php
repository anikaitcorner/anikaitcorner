<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home routes
Route::get('/', [HomeController::class, "index"])->name("home");
// price routes
Route::apiResource("/services", ServiceController::class)->names([
  "index" => "services"
]);
// about routes
Route::apiResource("/about", AboutController::class)->names([
  "index" => "about"
]);
// contact routes
Route::apiResource("/contact", ContactController::class)->names([
  "index" => "contact"
]);


Route::get("/blogs/{slug}", [BlogController::class, "show"])->name("blog");

Route::apiResource("/blogs", BlogController::class)->names([
  "index" => "blogs",
]);

Route::post("/mail",[ContactController::class,"sendMail"])->name('mail');