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
use App\Http\Controllers\Admin\CostumerController;
use App\Http\Controllers\frontend\BooksController;
use App\Http\Controllers\frontend\FlightControllers;
use App\Http\Controllers\frontend\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->middleware('admin.role')->group(function () {
    Route::get('/flight',[FlightController::class,'index'])->name('flight');
    Route::get('/flight/register',[FlightController::class,'register']);
    Route::get('/flight/delete/{id}',[FlightController::class,'delete']);
    Route::post('/getplanes',[FlightController::class,'getplanes']);
    Route::get('/flight/edit/{id}',[FlightController::class,'edit'])->name('flight.edit');
    Route::post('/flight/update/{id}',[FlightController::class,'update'])->name('flight.update');
    Route::post('/flight/log', [FlightController::class, 'log'])->name('getplanes');
    Route::post('/flight/store',[FlightController::class,'store']);
    Route::get('/home',[HomeController::class,'index'])->name('admin.home');
    Route::get('/home/register',[HomeController::class,'register']);
    Route::get('/home/delete/{id}',[HomeController::class,'delete']);
    Route::get('/home/edit/{id}',[HomeController::class,'edit'])->name('home.edit');
    Route::post('/home/store',[HomeController::class,'store']);
    Route::get('/airline',[AirlineController::class,'index']);
    Route::get('/airline/register',[AirlineController::class,'register']);
    Route::get('/airline/delete/{id}',[AirlineController::class,'delete']);
    Route::get('/airline/edit/{id}',[AirlineController::class,'edit'])->name('airline.edit');
    Route::post('/airline/update/{id}',[AirlineController::class,'update'])->name('airline.update');
    Route::post('/airline/store',[AirlineController::class,'store']);
    Route::get('/airport',[AirportController::class,'index']);
    Route::get('/airport/register',[AirportController::class,'register']);
    Route::get('/airport/delete/{id}',[AirportController::class,'delete']);
    Route::get('/airport/edit/{id}',[AirportController::class,'edit'])->name('airport.edit');
    Route::post('/airport/update/{id}',[AirportController::class,'update'])->name('airport.update');
    Route::post('/airport/store',[AirportController::class,'store']);
    Route::get('/plane',[PlanesController::class,'index']);
    Route::get('/plane/register',[PlanesController::class,'register']);
    Route::get('/plane/delete/{id}',[PlanesController::class,'delete']);
    Route::get('/plane/edit/{id}',[PlanesController::class,'edit'])->name('plane.edit');
    Route::post('/plane/update/{id}',[PlanesController::class,'update'])->name('plane.update');
    Route::post('/plane/store',[PlanesController::class,'store'])->name('plane.store');
    Route::get('/ticket',[TicketController::class,'index'])->name('admin.ticket');
    Route::get('/ticket/register',[TicketController::class,'register'])->name('ticket.register');
    Route::get('/ticket/delete/{id}',[TicketController::class,'delete'])->name('ticket.delete');
    Route::get('/ticket/edit/{id}',[TicketController::class,'edit'])->name('ticket.edit');
    Route::get('/ticket/update/{id}',[TicketController::class,'update'])->name('ticket.update');
    Route::post('/ticket/store',[TicketController::class,'store']);
    Route::get('/city',[CitiesController::class,'index'])->name('city');
    Route::get('/city/register',[CitiesController::class,'register']);
    Route::post('/city/store',[CitiesController::class,'store'])->name('city.store');
    Route::get('/city/delete/{id}',[CitiesController::class,'delete'])->name(name: 'city.delete');
    Route::get('/city/edit/{id}',[CitiesController::class,'edit'])->name('city.edit');
    Route::post('/city/update/{id}',[CitiesController::class,'update'])->name('city.update');
    Route::get('/costumer',[CostumerController::class,'index'])->name('costumer.view');
    Route::post('/costumer/store',[CostumerController::class,'store'])->name('costumer.store');
    Route::get('/costumer/register',[CostumerController::class,'register'])->name('costumer.register');
    Route::get('/costumer/delete/{id}',[CostumerController::class,'delete'])->name('costumer.delete');
    Route::get('/costumer/edit/{id}',[CostumerController::class,'edit'])->name('costumer.edit');
    Route::post('/costumer/update/{id}',[CostumerController::class,'update'])->name('costumer.update');

});
Route::middleware('user.role')->group(function () {

    
    Route::get('/home/register',[HomeControllers::class,'register']);
    Route::get('/info',[InfoController::class,'index']);
    Route::get('/ticket',[TicketControllers::class,'show'])->name('ticket.view');
    Route::get('/ticket/show/{$id}',[TicketControllers::class,'showbooking'])->name('ticket.show');
    Route::get('/ticket/register',[TicketControllers::class,'register']);
    Route::get('/ticket/{id}',[TicketControllers::class,'index'])->name('ticket');
    
    Route::get('/book',[BooksController::class,'index']);
});

   
Route::get('/home',[HomeControllers::class,'index'])->name('home');
Route::get('/home/store',[HomeControllers::class,'store'])->name('store');
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/login',[loginController::class,'index'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
Route::get('/forget',[ForgetController::class,'index']);
Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/login/store',[loginController::class,'store']);
Route::post('/register/store',[RegisterController::class,'store']);
Route::post('/register/update/{id}',[CostumerController::class,'update'])->name('register.update');
Route::get('/search',[FlightControllers::class,'search']);
// Route::get('/post',[PostController::class,'index']);
Route::get('/post/{id}',[PostController::class,'index'])->name('showRoute');
Route::post('/book/{id}',[PostController::class,'store'])->name('book.save');

// Route::get('/costumer/edit/{id}',[CostumerController::class,'edit'])->name('costumer.edit');




