<?php

namespace App\Http\Controllers\relawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelawanController extends Controller
{
    public function relawan()
    {
        return view('relawanview/relawan');
    }
}