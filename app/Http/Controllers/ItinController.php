<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItinController extends Controller
{
    /**
     * Display a listing of itineraries.
     */
    public function index()
    {
        // Fetch and display all itineraries
        return view('user.itin'); // Ensure this view exists
    }
}
