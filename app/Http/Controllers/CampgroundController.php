<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampgroundController extends Controller
{
    public function index()
    {
        // Your controller logic goes here
        return view('campgrounds.index');
    }
}
