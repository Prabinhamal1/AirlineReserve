<?php

namespace App\Http\Controllers\frontend;

use App\flights;
use App\Http\Controllers\Controller;
use App\planes;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index($id){
        // $planes = planes::where('airline_id', $id)->get();
        $flights = flights::where('airline_id', $id)->get();
         // Example: where airline_id matches $id

        return view('frontend.body.post', compact('planes'));

    }
}
