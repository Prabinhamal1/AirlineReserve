<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
   public function index(){
    return view('Admin.airline.view');
   }
   public function register(){
      return view('Admin.airline.input');
   }
}
