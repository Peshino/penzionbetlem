<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accommodation');
    }
}
