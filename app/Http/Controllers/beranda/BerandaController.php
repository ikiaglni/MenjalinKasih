<?php

namespace App\Http\Controllers\beranda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('berandaview/beranda'); 
    }
}
