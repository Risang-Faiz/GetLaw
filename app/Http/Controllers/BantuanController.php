<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function form()
    {
        return view('bantuan.form');
    }

    public function store(Request $request)
    {
        Bantuan::create($request->all());
        return redirect()->route('bantuan.form')->with('success', 'Permohonan bantuan hukum telah diterima');
    }
}

