<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\Apartment;

class GeneralController extends Controller
{
    public function home()
    {
    	$apartments = Apartment::all();
    	
    	return view('index', compact('apartments'));
    }
}
