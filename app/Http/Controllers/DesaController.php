<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesaController extends Controller
{
    public  function tentang()
    {
        return view('about.desa');
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
