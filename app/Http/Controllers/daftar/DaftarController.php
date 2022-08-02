<?php

namespace App\Http\Controllers\daftar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function daftar()
    {
        return view('daftarview/daftar');
    }
}