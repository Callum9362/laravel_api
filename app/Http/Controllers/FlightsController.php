<?php

namespace App\Http\Controllers;

use App\Flights;
use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function index()
    {
        return Flights::all();
    }

    public function show($name)
    {
        return Flights::where('name', 'LIKE', '%'.$name.'%')->get();
    }
}
