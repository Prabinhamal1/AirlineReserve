<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\planes;
use App\airlines;

class PlanesController extends Controller
{
    public function index(){
        $planes = planes::all();
        $data = compact('planes');
     return view("Admin.Planes.view",$data);
    }
    public function register(){
        $airline = airlines::all();
        $data = compact('airline');
        return view("Admin.Planes.input", $data);
    }
    public function store(Request $request){
        $plane = new planes;
        $plane->name = $request['name'];
        $plane->airline_id = $request['airline'];
        $plane->code = $request['code'];
        $plane->capacity = $request['capacity'];

        $plane->save();

        return redirect("admin/plane")->with("success","");

    }
}
