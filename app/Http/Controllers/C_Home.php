<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Home extends Controller
{
    public function home()
    {
        $data = ['judul' => 'Home'];
        return view('home.home', $data);
    }

    public function academic()
    {
        return view('home.academic');
    }

    public function about()
    {
        return view('home.about');
    }
}
