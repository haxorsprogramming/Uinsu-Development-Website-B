<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\M_Fakultas;

class C_Home extends Controller
{
    public function home()
    {
        
        $data = ['judul' => 'Home'];
        return view('home.home', $data);
    }

    public function academic()
    {
        $fakultas = M_Fakultas::all();
        $data = ['judul' => 'Academic', 'dataFakultas' => $fakultas];
        return view('home.academic', $data);
    }

    public function about()
    {
        return view('home.about');
    }
}
