<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceListController extends Controller
{
    /**
     * Display
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
