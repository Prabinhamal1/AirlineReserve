<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
   public function index(){
    return view("Admin.layout.nav");
   }
   public function register(){
    return view("Admin.layout.nav");
   }
}
