<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\flights;

class FlightControllers extends Controller
{
    public function search(Request $request){
        $request->validate([
            'from' => 'required|string',
            'to' => 'required|string',
            'depart' => 'required|date',
            'return' => 'nullable|date',
            'class' => 'required|string',
            'passengerCount' => 'required|integer|min:1',
        ]);

        // Get search parameters from the request
        $from = $request->input('from');
        $to = $request->input('to');
        $depart = $request->input('depart');
        $return = $request->input('return'); // Optional
        $class = $request->input('class');
        $passengerCount = $request->input('passengerCount');

        // Query the flights table based on search criteria
        $flights = flights::where('origin_id', $from)
                        ->where('destination_id', $to)
                        ->whereDate('departure', $depart)
                        // ->when($return, function($query) use ($return) {
                            // Only add 'return_date' filter if 'return' is provided
                            // return $query->whereDate('arrival', $return);
                        // })
                        ->get();

        // Pass the search results to the results page
        return view('frontend.body.combine', [
            'flights' => $flights,
            'class' => $class,
            'passengerCount' => $passengerCount
        ]);
    }
}