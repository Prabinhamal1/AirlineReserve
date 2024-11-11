<?php

namespace App\Http\Controllers\Sign;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(Request $request) {
        // Store the URL the user came from in the session (only if they came from a different page)
        if (!$request->session()->has('url.intended')) {
            $request->session()->put('url.intended', url()->previous());
        }
        
        return view("Log.login");
    }    
    public function store(Request  $request){
        $credentails = $request->validate([
            'email' =>  'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentails)){
            $user = Auth::user();
            $request->session()->regenerate();
            if ($user->is_admin === 1){
            return redirect()->route('admin.home')->with('success', 'You are logged in successfully.');
        }
            else {
          
          return redirect()->intended('/')->with('success', 'You are logged in successfully.');
        }
    }
            return redirect(route('login'))->withErrors(['password' => 'Invalid password'])->withInput();
        
}
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}