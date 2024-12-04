<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use Illuminate\Http\Request;

class LembagaController extends Controller
{
    public function index()
    {
        $lembagas = Lembaga::all();
        return view('lembaga.index', compact('lembagas'));
    }
}
