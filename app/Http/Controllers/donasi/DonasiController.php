<?php

namespace App\Http\Controllers\donasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function donasi()
    {
        return view('donasiview/donasi');
    }
}