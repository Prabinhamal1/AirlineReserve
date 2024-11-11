<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\airlines;
use App\airports;
use App\flights;
use App\planes;
use App\Cities;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class FlightController extends Controller
{
   
    public function index(){
        $flights = flights::with(['origin', 'destination'])->paginate(10);
        $data = compact('flights');
        return view('admin.flight.view', $data);
       }
    public function register(){
        $airlines =  airlines::all();
        $airports = airports::all();
        $cities = Cities::all();
        $planes =  planes::all();
        $url = url('/admin/flight/store');
        $title = "ADD AIRLINE";
        $data = compact('airlines','airports','cities','planes','url','title');
        return view("admin.flight.input")->with($data);
        
       }
       public function store(Request $request)
       {
        $validatedData = $request->validate([
            'depart' => 'required|date|after_or_equal:today', // Ensure departure date is today or later
            'return' => 'required|date|after_or_equal:depart', // Ensure return date is after or equal to departure
        ]);
        $flights = new flights;
        $flights->airline_id= $request->airline;
        $flights->plane_id = $request->plane;
        $flights->origin_id = $request->origin;
        $flights->destination_id= $request->destination;
        $flights->departure = Carbon::parse($request->depart);
        $flights->arrival = Carbon::parse($request->return);
        $flights->departure_hour = $request->hour;
        $flights->departure_min = $request->minute;
        $flights->departure_ampm = $request->ampm;
        $flights->arrival_hour = $request->arrival_hour;
        $flights->arrival_min = $request->arrival_minute;
        $flights->arrival_ampm = $request->arrival_ampm;
        $flights->price =  $request->price;
        $flights->seats =  $request->seat;
        $flights->flight_number = $request->flight_number;
        $flights->remain_seats = $request->seat;
        $flights->save();
        return redirect(route('flight'));

       }
       public function delete($id){
        $flights = flights::find($id);
    
        if (!$flights) {
            return redirect('/admin/flight')->with('error', "Flight not found.");
        }
    
        $flights->delete();
        return redirect('/admin/flight')->with('status', "Data deleted successfully");
    }
    public function log(Request $request)
    {
dd($request->all());
        $request->validate([
            'airline_id' => 'required|integer|exists:airlines,id',
        ]);
        
        // Retrieve the airline ID from the request
        $airline_id = $request->input('airline_id');

        // Fetch planes associated with the selected airline
        $planes = planes::where('airline_id', $airline_id)->get(['id', 'name']);

        // Return the planes as JSON response
        return response()->json($planes);
    
    }
    public function edit($id){
        $flights = flights::find($id);
        $airlines =  airlines::all();
        $airports = airports::all();
        $cities = Cities::all();
        $planes =  planes::all();

        if(is_null($flights)){
            return view('admin.flight.view');
        }else{
            $url = url('/admin/flight/update')."/".$id;
            $title = "UPDATE FLIGHTS";
            $data = compact('url','title','airlines','airports','cities','planes','flights');
            return view('admin.flight.input')->with($data);
        }
    }
    public function update($id,Request $request){
        $flights = flights::find($id);
        $flights->airline_id= $request->airline;
        $flights->plane_id = $request->plane;
        $flights->origin_id = $request->origin;
        $flights->destination_id= $request->destination;
        $flights->departure = Carbon::parse($request->depart);
        $flights->arrival = Carbon::parse($request->return);
        $flights->departure_hour = $request->hour;
        $flights->departure_min = $request->minute;
        $flights->departure_ampm = $request->ampm;
        $flights->arrival_hour = $request->arrival_hour;
        $flights->arrival_min = $request->arrival_minute;
        $flights->arrival_ampm = $request->arrival_ampm;
        $flights->price =  $request->price;
        $flights->seats =  $request->seat;
        $flights->flight_number = $request->flight_number;
        $flights->remain_seats = $request->seat;
        $flights->save();
        return redirect(route('flight'));

    }
    public function getPlanes(Request $request) {
        $airline_id = $request->post('airline_id');
    
        // Fetch planes based on airline_id
        $planes = DB::table('planes')
                    ->where('airline_id', $airline_id)
                    ->orderBy('name', 'asc')
                    ->get();
    
        // Generate HTML for each plane option
        $html = '<option value="">Select plane</option>';
        foreach ($planes as $plane) {
            $html .= '<option value="' . $plane->id . '">' . $plane->name . '</option>';
        }
    
        // Return the HTML as JSON
        return response()->json(['html' => $html]);
    }
    
}
