<?php

namespace App\Http\Controllers\Sign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("Log.register");
    }
    public function store(Request $request){
        $data = $request->validate([
            

        ]);
    }
}
