<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EatingController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('eating');
    }
}
