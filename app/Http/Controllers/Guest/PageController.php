<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('home');
    }

    function index() {
        $trains = Train::all();

        return view('pageListTrains/index', compact('trains'));
    }
}
