<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flights;
use App\airports;
use  App\airlines;
use App\users;
use App\Models\books;
use Illuminate\Support\Facades\Auth;

class TicketControllers extends Controller
{
     public function index($id){
      $user = Auth::user();
      $booking = books::where('users_id',Auth::id())->get();
      $data = compact('booking','user','id');
      return view('frontend.body.Ticket')->with($data);
   }
   public function register(){
      $flight = flights::all();
      $users = users::all();
      $airlines = airlines::all();
      return view('frontend.body.Ticket',compact('flight','users','airlines',));
   }
   public function showbooking($id){
      $booking = books::where('users_id',$id)->get();
      $data = compact('booking');
      return view('frontend.body.Ticket')->with($data);
   }
}
