<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\BlogController;
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
Route::apiResource("/price", PriceController::class)->names([
  "index" => "price"
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