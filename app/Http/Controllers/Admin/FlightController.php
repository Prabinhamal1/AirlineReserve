<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\airlines;
use App\airports;
use App\flights;
use App\planes;
use App\Cities;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
   
    public function index(){
        return view("admin.flight.view");
       }
    public function register(){
        $airlines =  airlines::all();
        $airports = airports::all();
        $cities = Cities::all();
        $planes =  planes::all();
        return view("admin.flight.input",compact('airlines','airports','cities','planes'));
        
       }
       public function store(Request $request){
        $flights = new flights;
        $flights->airline_id= $request->airline;
        $flights->plane_id = $request->plane;
        $flights->orgin_id = $request->origin;
        $flights->destination_id= $request->destination;
        $flights->depature = $request->departure_time;
        $flights->arrival = $request->arrival_time;
        $flights->price =  $request->price;
        $flights->flight_number = $request->flight_number;
        $flights->save();

       }
}
