<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cities;
use App\airports;

class AirportController extends Controller
{
   
    public function index(){

        $airport = airports::all();

        $data = compact('airport');
        return view('Admin.airport.view')->with($data);

       }
       public function register(){
        $cities = Cities::all();
        $url = url('/admin/airport/store');
        $title = "ADD AIRPORT";
        $data = compact('cities','url','title');

        return view('Admin.airport.input')->with($data);
        

     }
     public function store(Request $request){
        $airports = new  airports;
        $airports->name = $request['name'];
        $airports->city_id = $request['city'];
        $airports->save();
        return redirect('/admin/airport');
     }
     public function delete($id){
      $airports =  airports::find($id);
      $airports->delete();
      return redirect('/admin/airport')->with('status',"Data delete sucesfully");
  }
  public function  edit($id){
    $airports = airports::find($id);
    $cities = Cities::all();
    if(is_null($airports)){
        return view('Admin.airport.view');
    }else{
      $url = url('/admin/airport/update') ."/". $id;
      $title = "UPDATE AIRPORT";
      $data =  compact('airports','url','title','cities');
    return view ('Admin.airport.input')->with($data);
    }
  }
  public function update($id, Request $request){
    $airports = airports::find($id);
    $airports->name = $request['name'];
        $airports->city_id = $request['city'];
        $airports->save();
        return redirect('/admin/airport');
  }

}
