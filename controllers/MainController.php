<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function fotos()
    {
        return view('fotos');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
