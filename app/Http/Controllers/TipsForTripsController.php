<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsForTripsController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tips-for-trips');
    }
}
