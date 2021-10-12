<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        # code...
        $data['name1'] = "Aman";
        $data['name2'] = "Shubham";

        // return $data;
        return view('welcome',compact('data'));

    
    
    }
    public function homepage()
    {
        # code...
    }
}
