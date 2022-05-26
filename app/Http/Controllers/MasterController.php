<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// main page controller
class MasterController extends Controller
{
    //
    function index(){
        // nav bar json
        $navBar = config('headerNav');
        return view('layouts.master',compact('navBar'));
    }
}
