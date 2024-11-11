<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\users;

class CostumerController extends Controller
{
    public function index(){
        $users = users::all();
        // $url = url('/register/store');
        // $title = "REGISTRATION";
        // $sign = "SIGNUP";
        $data = compact('users');
        return view('admin.costumer.view')->with($data);
    }
    public function delete($id) {
        $user = users::find($id);
    
        if ($user) {
            $user->delete();
            return redirect()->route('costumer.view')->with('status', 'User deleted successfully');
        }
    
        return redirect()->route('costumer.view')->with('error', 'User not found');
    }
    public function store(Request $request){
       
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'address'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        $user = new users();
        $user->name = $data['name'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();
        return redirect()->route('costumer.view');
    }
    public function register(){
        $users = users::all();
        $url = url('/admin/costumer/store');
        $title = "REGISTRATION";
        $sign = "SIGNUP";
        $data = compact('url','users','title','sign');
        return view("admin.costumer.input")->with($data);
    }
    public function edit($id){
        $user = users::find($id);
        if(is_null($user)){
            return redirect()->route('costumer.view');
        }else {
            $url = url('/admin/costumer/update')."/". $id;
            $title = "UPDATE";
            $sign = "SUBMIT";
            $data = compact('url','user','title','sign');
            return view("admin.costumer.input")->with($data);
        }
    }
    public function update($id, Request $request) {
        // Find the user by ID
        $user = users::findOrFail($id);
    
        // Validate the request data
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric|digits:10',
            'address' => 'required',
            'email' => "required|email|unique:users,email,{$id}",
            'password' => 'nullable|min:8',
        ]);
    
        // Update user details
        $user->name = $data['name'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        $user->email = $data['email'];
    
        // Only hash and update the password if it is provided
        if (!empty($data['password'])) {
            $user->password = bcrypt($data['password']);
        }
    
        // Save the updated user to the database
        $user->save();
    
        // Redirect with a success message
        return redirect()->route('costumer.view')->with('success', 'User updated successfully');
    }
    
}
