<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        return view("Admin.Cities.view");
    }
    public function register(){
        return view('Admin.Cities.input');
     }
}
