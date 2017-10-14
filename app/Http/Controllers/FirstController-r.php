<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController-r extends Controller
{
    public function index(){
    	$name = "Ahsan";
    	return view('welcome')->with('name', $name);
    }
}
