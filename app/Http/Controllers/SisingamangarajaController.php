<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SisingamangarajaController extends Controller
{
    public function home() {
        return view('home');
    }

    public function biografi() {
        return view('biografi');
    }

    public function perjuangan() {
        return view('perjuangan');
    }

    public function galeri() {
        return view('galeri');
    }
}
