<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bussinesformation extends Controller
{
    /**
     * Display a listing of itineraries.
     */
    public function index()
    {
        // Fetch and display all itineraries
        return view('user.bussinesformation'); // Ensure this view exists
    }
}
