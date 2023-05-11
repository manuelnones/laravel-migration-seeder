<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('home');
    }

    function index() {
        return view('pageListTrains/index');
    }
}
