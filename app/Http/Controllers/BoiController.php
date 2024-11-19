<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoiController extends Controller
{
     /**
     * Display a listing of itineraries.
     */
    public function index()
    {
        // Fetch and display all itineraries
        return view('user.boireporting'); // Ensure this view exists
    }
}
