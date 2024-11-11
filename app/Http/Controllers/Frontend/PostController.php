<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\flights;
use App\planes;
use App\Models\books;
use App\Models\User;
use App\users;
class PostController extends Controller
{
    public function index($id, Request $request){
        if(Auth::id()){
            $user = Auth::user();
            $flight = flights::findOrFail($id);
            $flights = flights::all();
            $book = books::all();
            $passengerCount = $request->input('passengerCount', 1);

        return view('frontend.body.post', compact('flight','flights','passengerCount','id','book'));
        } else {
            return redirect()->route('login')->with('message', 'Please log in to book your flight.');
        }
    }
    public function store($id, Request $request)
{
    // Validate that the name and passengerCount are provided
    $request->validate([
        'name' => 'required|string|max:255', // Ensure name is required, a string, and max length 255
        // 'passengerCount' => 'required|integer|min:1', // Ensure passengerCount is required and an integer
    ]);

    $flight = flights::findOrFail($id); // Find the flight by ID
    $user = Auth::user(); // Get the logged-in user
    // $passengerCount = $request->passengerCount; // Get the number of passengers from the request

    // // Check if there are enough seats available for the number of passengers
    // if ($flight->remain_seats >= $passengerCount) {
        // Create a new booking
        $book = new books;
        $book->users_id = $user->id;
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
        $book->arrival_ampm = $flight->arrival_ampm;
        $book->airline = $flight->airlines->name;
        $book->flight_id = $flight->id;
        

        // Decrease the available seats by the passenger count
        // $flight->remain_seats -= $passengerCount; // Adjust this if you're using available_seats or any other column
        // $flight->save(); // Save the updated flight data
        $book->save();

        // Redirect to the ticket route with the user ID
        return redirect()->route('ticket', ['id' => $book->users_id]);
    // } else {
    //     // If there are not enough seats available, redirect back with an error
    //     return redirect()->back()->with('error', 'Not enough available seats for this flight.');
    // }
}

    
   }
