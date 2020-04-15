<?php

namespace App\Http\Controllers\Trip;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function homepage()
    {
        return view('pages.travel.index');
    }


    public function create()
    {
        return view('pages.travel.create-trip');
    }
}
