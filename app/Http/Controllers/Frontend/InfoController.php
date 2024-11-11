<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flights;

class InfoController extends Controller
{
    public function index(){
        $flights = flights::all();
        return view('frontend.body.info',compact('flights'));
       }
       public function store(){
        $flights =  new flights();
        return view('frontend.body.info',compact('flights'));

       }
}
