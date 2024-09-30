<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirportController extends Controller
{
   
    public function index(){
        return view("Admin.airport.view");
       }
       public function register(){
        return view('Admin.airport.input');
     }
}
