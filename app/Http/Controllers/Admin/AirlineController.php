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
      $url = url('/admin/airline/store');
      $title = "ADD AIRLINE";
      $data = compact('url','title');
      return view('Admin.airline.input')->with($data);
   }
   public function store(Request $request){
      $airlines =  new airlines;
      $airlines->name = $request['name'];
      $airlines->code = $request['code'];
      $airlines->save();
      return redirect('/admin/airline')->with('success', 'Airport added successfully');

   }
   public function delete($id){
      $airlines =  airlines::find($id);
      $airlines->delete();
      return redirect('/admin/airline')->with('status',"Data delete sucesfully");
  }
  public function edit($id){
   $airlines = airlines::find($id);
   if(is_null($airlines)){
      return view('Admin.airline.view');
   }else{
      $url = url('/admin/airline/update') ."/". $id;
      $title = "UPDATE AIRLINE";
      $data =  compact('airlines','url','title');
   return view('Admin.airline.input')->with($data);
   }
}
   public function update($id,Request $request){
      $airlines = airlines::find($id);
      $airlines->name = $request['name'];
      $airlines->code = $request['code'];
      $airlines->save();
      return redirect('/admin/airline');
   }
}
