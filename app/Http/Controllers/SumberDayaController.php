<?php

namespace App\Http\Controllers;

use App\Models\SumberDaya;
use Illuminate\Http\Request;

class SumberDayaController extends Controller
{
    public function index()
    {
        $sumberdayas = SumberDaya::all();
        return view('sumberdaya.index', compact('sumberdayas'));
    }
}
