<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AirlineController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\PlanesController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\CitiesController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeControllers;
use App\Http\Controllers\Frontend\InfoController;
use App\Http\Controllers\Frontend\TicketControllers;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Sign\ForgetController;
use App\Http\Controllers\Sign\loginController;
use App\Http\Controllers\Sign\RegisterController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
Route::get('/flight',[FlightController::class,'index']);
Route::get('/flight/register',[FlightController::class,'register']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/home/register',[HomeController::class,'register']);
Route::get('/airline',[AirlineController::class,'index']);
Route::get('/airline/register',[AirlineController::class,'register']);
Route::get('/airport',[AirportController::class,'index']);
Route::get('/airport/register',[AirportController::class,'register']);
Route::get('/plane',[PlanesController::class,'index']);
Route::get('/plane/register',[PlanesController::class,'register']);
Route::get('/ticket',[TicketController::class,'index']);
Route::get('/ticket/register',[TicketController::class,'register']);
Route::get('/city',[CitiesController::class,'index']);
Route::get('/city/register',[CitiesController::class,'register']);
});
Route::get('/contact',[ContactController::class,'index']);
Route::get('/home',[HomeControllers::class,'index']);
Route::get('/info',[InfoController::class,'index']);
Route::get('/ticket',[TicketControllers::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/login',[loginController::class,'index']);
Route::get('/forget',[ForgetController::class,'index']);
Route::get('/register',[RegisterController::class,'index']);
