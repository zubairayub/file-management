<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class einapplication extends Controller
{
     /**
     * Display a listing of itineraries.
     */
    public function index()
    {
        // Fetch and display all itineraries
        return view('user.einapplication'); // Ensure this view exists
    }
}
