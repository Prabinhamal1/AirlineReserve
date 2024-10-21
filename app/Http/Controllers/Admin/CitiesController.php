<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller
{
    public function index(){
        $cities = Cities::all();
        $data = compact('cities');
        return view("Admin.Cities.view")->with($data);
    }
    public function register(){
        return view('Admin.Cities.input');
     }
    public function  store(Request $request){

        $cities = new cities;
        $cities->name = $request['name'];
        $cities->Code = $request['code'];
        $cities->save();
        return redirect('/admin/city');
    }
}