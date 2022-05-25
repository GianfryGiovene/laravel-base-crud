<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    function index(){
        $navBar = config('headerNav');
        $footerList = config('footerList');
        $footerLink = config('footerFollowUs');
        return view('layouts.master',compact('navBar'),compact('footerList'),compact('footerLink'));
    }
}
