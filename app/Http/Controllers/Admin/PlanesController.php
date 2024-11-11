<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\planes;
use App\airlines;
use App\flights;

class PlanesController extends Controller
{
    public function index(){
        $planes = planes::all();
        $data = compact('planes');
     return view("Admin.Planes.view",$data);
    }
    public function register(){
        $airline = airlines::all();
        $url = url('/admin/plane/store');
        $title = "ADD AIRLINES";
        $data = compact('airline','url','title');
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
    public function delete($id){
        $planes =  planes::find($id);
        $planes->delete();
        return redirect('/admin/plane')->with('status',"Data delete sucesfully");
    }
    public  function edit($id){
       $airline = airlines::all();
        $planes = planes::find($id);
        if(is_null($planes)){
            return view("Admin.Planes.view");
        }else{
            $url = url('/admin/plane/update')."/".$id;
            $title = "UPDATE PLANES";
            $data = compact('airline','planes','url','title');
        return view('Admin.Planes.input')->with($data);
        }
    }
    public function  update(Request $request,$id){
        $plane = planes::find($id);
        $plane->name = $request['name'];
        $plane->airline_id = $request['airline'];
        $plane->code = $request['code'];
        $plane->capacity = $request['capacity'];

        $plane->save();
        return redirect("admin/plane");
    }

    
}