<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\airlines;

class AirlineController extends Controller
{
   public function index(){
      $airlines = airlines::all();
      $data = compact('airlines');
      return view('Admin.airline.view')->with($data);
   }
   public function register(){
      return view('Admin.airline.input');
   }
   public function store(Request $request){
      $airlines =  new airlines;
      $airlines->name = $request['name'];
      $airlines->code = $request['code'];
      $airlines->save();
      return redirect('/admin/airline')->with('success', 'Airport added successfully');

   }
   
}
