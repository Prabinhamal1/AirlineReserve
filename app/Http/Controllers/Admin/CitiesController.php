<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller
{
    public function index(){
        $cities = Cities::all();
        // $url = route('city.store');
        $data = compact('cities');
        return view("Admin.Cities.view")->with($data);
    }
    public function register(){
        $url = url('/admin/city/store');
        $title = "ADD CITIES";
        $data = compact('url','title');
        return view('Admin.Cities.input')->with($data);
     }
    public function  store(Request $request){

        $cities = new cities;
        $cities->name = $request['name'];
        $cities->Code = $request['code'];
        $cities->save();
        return redirect('/admin/city');
    }
    public function delete($id){
        $cities =  Cities::find($id);
        $cities->delete();
        return redirect('/admin/city')->with('status',"Data delete sucesfully");
    }
    public function edit($id){
        $cities = Cities::find($id);
        if(is_null($cities)){
            return view("Admin.Cities.view");
        }else{
            $url = url('/admin/city/update') ."/". $id;
            $title = "UPDATE CITIES";
            $data = compact('cities','url','title');
            return view('Admin.Cities.input')->with($data);
        }
    }
    public function update($id,Request $request){
        $cities = Cities::find($id);
        $cities->name = $request['name'];
        $cities->Code = $request['code'];
        $cities->save();
        return redirect('/admin/city');
    }
}