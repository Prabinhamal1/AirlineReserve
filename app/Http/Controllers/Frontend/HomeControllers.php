<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\airports;
use App\Cities;
use App\flights;
use Carbon\Carbon;

class HomeControllers extends Controller
{
    public function index(){
        $airports = airports::all();
        $cities = Cities::all();
        
        return view('frontend.body.index', compact('airports','cities'));
       }
    public function register(){
        $airports = airports::all();
        return view('frontend.body.index', compact('airports','cities'));
    }
    public function store(Request $request){
        $request->validate([
            'from' => 'required|exists:cities,id',
            'to' => 'required|exists:cities,id',
            'depart' => 'required|date',
            'return' => 'nullable|date|after_or_equal:depart',
            'class' => 'required|in:Economy,Business',
            'passengerCount' => 'required|integer|min:1'
        ]);
        $isOneWay = $request->input('trip_type') === 'one_way';

        // Retrieve input data
        $from = $request->input('from');
        $to = $request->input('to');
        $depart = $request->input('depart');
        $return = $request->input('return');
        $class = $request->input('class');
        $passengerCount = $request->input('passengerCount');
   
        $flights = flights::query();

        // Apply search filters based on the request inputs
        if ($request->filled('from')) {
            $flights->where('origin_id', $request->input('from'));
        }

        if ($request->filled('to')) {
            $flights->where('destination_id', $request->input('to'));
        }

        if ($request->filled('depart')) {
            $flights->whereDate('departure', $request->input('depart'));
        }

        // Execute the query and get results
        $results = $flights->get();

        // Return the view with the results
        return view('frontend.body.search', compact('results'));
    }
}

        
        // Query flights based on criteria
        // $flights = flights::where('origin_id', $from)
        //     ->where('destination_id', $to)
        //     ->where('departure', $depart)
        // //     // ->where('class', $class)
        // //     ->get();

        // // Pass data to view
        // return view('frontend.body.info', compact('flights', 'from', 'to', 'depart', 'return', 'class', 'passengerCount'));

    // public function search(Request $request) {
    //     $origin = $request->input('from');
    //     $destination = $request->input('to');
    //     $departureDate = $request->input('depart');

    //     $query = Flights::with(['origin', 'destination']);
    //     if ($origin) {
    //         $query->where('origin_id', $origin);
    //     }
    //     if ($destination) {
    //         $query->where('destination_id', $destination);
    //     }
    //     if ($departureDate) {
    //         $query->whereDate('departure', Carbon::parse($departureDate));
    //     }

    //     $flights = $query->get();
    //     return view('frontend.flight.search_results', compact('flights'));
    // }
// }

