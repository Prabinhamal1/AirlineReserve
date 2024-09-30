<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanesController extends Controller
{
    public function index(){
     return view("Admin.Planes.view");
    }
    public function register(){
     return view("Admin.Planes.input");
    }
}
