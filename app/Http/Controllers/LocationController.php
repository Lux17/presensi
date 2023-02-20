<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function userLocation()
    {
        // $ip = '49.35.41.195'; //For static IP address get
        $ip = request()->ip(); //Dynamic IP address get
        $data = \Location::get($ip);                
        return view('details',compact('data'));
    }

    public function simpan()
    {
        
    }
}