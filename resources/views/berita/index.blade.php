@extends('layouts.app')

@section('title', 'Berita Hukum Terkini')

@section('content')
<h1>Berita Hukum Terkini</h1>
<p>Berikut adalah berita terbaru yang berkaitan dengan hukum di Indonesia:</p>

@foreach($beritas as $berita)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $berita->judul }}</h5>
            <p class="card-text">{{ Str::limit($berita->konten, 150) }}...</p>
            <a href="{{ route('berita.show', $berita->id) }}" class="btn">Baca Selengkapnya</a>
        </div>
    </div>
@endforeach

@if($beritas->isEmpty())
    <p class="alert alert-warning">Belum ada berita hukum saat ini. Silakan cek kembali nanti.</p>
@endif
@endsection


