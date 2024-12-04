@extends('layouts.app')

@section('title', 'Daftar Lembaga Hukum di Indonesia')

@section('content')
<h1>Daftar Lembaga Hukum di Indonesia</h1>
<p>Berikut adalah daftar lembaga hukum yang tersedia di seluruh Indonesia:</p>

<table class="table">
    <thead>
        <tr>
            <th>Nama Lembaga</th>
            <th>Alamat</th>
            <th>Kontak</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>LBH Jakarta</td>
            <td>Jl. Diponegoro No. 74, Jakarta Pusat</td>
            <td>+62 21 3145518</td>
        </tr>
        <tr>
            <td>YLBHI</td>
            <td>Jl. Pangeran Diponegoro No. 74, Jakarta</td>
            <td>+62 21 3929801</td>
        </tr>
        <tr>
            <td>Kejaksaan Agung RI</td>
            <td>Jl. Sultan Hasanuddin No. 1, Kebayoran Baru, Jakarta Selatan</td>
            <td>+62 21 7221269</td>
        </tr>
    </tbody>
</table>
@endsection



