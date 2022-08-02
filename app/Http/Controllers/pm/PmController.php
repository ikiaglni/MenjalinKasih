<?php

namespace App\Http\Controllers\pm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PmController extends Controller
{
    public function pm()
    {
        return view('pmview/pm');
    }
}