<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get("/contact-us",[ContactController::class, "contact"]);

Route::post("/send-message",[ContactController::class,"sendEmail"])->name("contact.send");

Route::get("/index",[PageController::class,"index"]);
Route::get("/about",[PageController::class,"about"]);
Route::get("/project",[PageController::class,"project"]);