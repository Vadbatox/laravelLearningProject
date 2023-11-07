<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;


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

Route::get("/",[PagesController::class,"index"]);

Route::get("/apropos",[PagesController::class,"apropos"]);

Route::get("/contact",[PagesController::class,"contact"]);

Route::get("/service",[PagesController::class,"service"]);

Route::get("/staff",[PagesController::class,"staff"]);

Route::get("/vision",[PagesController::class,"vision"]);


Route::get("/user",[UserController::class,"allUsers"]);
