<?php

namespace App\Http\Controllers\Sign;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\users;

class RegisterController extends Controller
{
    public function index(){
        return view("Log.register");
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'address'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);
        $user = new users;
        $user->name = $data['name'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

}
