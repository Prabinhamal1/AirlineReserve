<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\books;
use App\flights;

class TicketController extends Controller
{
    
   public function index(){
      $books = books::all();
    return view("Admin.Ticket.ticket",compact('books'));
   }
   public function register(){
    $books = books::all();
    $url = url('/admin/ticket/store');
    $title = "ADD TICKET";
    $data = compact('books','url','title');
    return view('Admin.ticket.input')->with($data);
   }
   public function store(Request $request){
    $flight = flights::all();
    $request->validate([
        'name' => 'required|string|max:255', // Ensure name is required, a string, and max length 255
    ]);
        $book = new books;
        $book->name = $request->name;
        $book->from = $flight->origin->location->name;
        $book->to = $flight->destination->location->name;
        $book->departure_date = $flight->departure;
        $book->departure_hour = $flight->departure_hour;
        $book->departure_minute = $flight->departure_min;
        $book->departure_ampm = $flight->departure_ampm;
        $book->arrival_date = $flight->arrival;
        $book->arrival_hour = $flight->arrival_hour;
        $book->arrival_minute = $flight->arrival_min;
        $book->arrival_ampm= $flight->arrival_ampm;
        $book->airline = $flight->airlines->name;
        $book->flight_id = $flight->id;
        $book->save();
        return  view('Admin.Ticket.ticket')->with('success', 'Ticket created successfully');

    }
   public function delete($id)
   {
       $books = books::find($id);
   
       if ($books) {
           $books->delete();
       } else {
           return redirect()->back()->with('error', 'Record not found.');
       }
       $books = books::all();
   
       return view("Admin.Ticket.ticket",compact('books'));
   }
   public function edit($id) {
    $books = books::findOrFail($id);

    if (is_null($books)) {
        return redirect()->back()->with('error', 'Record not found.');
    } else {
        $url = url('/admin/ticket/update') . "/" . $id;
        $title = "UPDATE TICKET";
        $data = compact('books', 'title', 'url');
        return view('Admin.Ticket.input')->with($data);
    }
}

   public function update($id,Request $request){
        $books = books::find($id);

   }
   
}
