<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeCtrl extends Controller
{

    public function home()
    {
        return view('home.home');
    }

    public function about()
    {
        return view('home.home');
    }

}
