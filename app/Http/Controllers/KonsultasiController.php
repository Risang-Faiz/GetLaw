<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function create()
    {
        return view('konsultasi.create');
    }

    public function store(Request $request)
    {
        Konsultasi::create($request->all());
        return redirect()->route('konsultasi.create')->with('success', 'Konsultasi berhasil dikirim');
    }
}

