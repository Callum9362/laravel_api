<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flights;

class FlightByAirlineController extends Controller
{
    public function index($name, $airline)
    {
        return Flights::where('name', 'LIKE', '%'.$name.'%')->where('airline', 'LIKE', '%'.$airline.'%')->get();
    }
}
