@extends('layouts.app')

@section('title', 'Selamat Datang di GetLaw')

@section('content')
<div class="jumbotron bg-light p-5">
    <h1 class="display-4">Selamat Datang di GetLaw</h1>
    <p class="lead">Platform bantuan hukum untuk meningkatkan pemahaman masyarakat tentang hukum dan hak-hak mereka.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('berita.index') }}" role="button">Lihat Berita Hukum</a>
</div>
@endsection
