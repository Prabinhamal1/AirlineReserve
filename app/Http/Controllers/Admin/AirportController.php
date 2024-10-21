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

        return view('Admin.airport.input',compact('cities'));
        

     }
     public function store(Request $request){
        $airports = new  airports;
        $airports->name = $request['name'];
        $airports->city_id = $request['city'];
        $airports->save();
        return redirect('/admin/airport');
     }

}
