<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //Countries list

    public function index(){
        return view('countries-list');
    }
}
