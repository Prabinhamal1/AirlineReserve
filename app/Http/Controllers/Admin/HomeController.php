<?php

namespace App\Http\Controllers\Admin;

use App\airlines;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\airports;
use App\flights;
use App\planes;
use App\users;
use App\Models\books;


class HomeController extends Controller
{
    
   public function index(){
      $planeCount = planes::count();
      $airportCount = airports::count();
      $airlineCount =  airlines::count();
      $flightCount = flights::count();
      $userCount = users::count();
      $flights =  flights::all();
      $bookscount = books::count();

    return view("Admin.home.home",compact('planeCount','airportCount','airlineCount','flightCount','planeCount','userCount','flights','bookscount'));
   }
   public function register(){
      $airports = airports::all();
    return view("Admin.layout.nav");
   }

}
