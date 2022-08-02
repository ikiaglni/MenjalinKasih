<?php

namespace App\Http\Controllers\masuk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function masuk()
    {
        return view('masukview/masuk');
    }
}