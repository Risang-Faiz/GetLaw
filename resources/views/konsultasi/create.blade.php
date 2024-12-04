@extends('layouts.app')

@section('title', 'Konsultasi Hukum Online')

@section('content')
<h1>Konsultasi Hukum Online</h1>
<form action="{{ route('konsultasi.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="permasalahan" class="form-label">Permasalahan</label>
        <textarea name="permasalahan" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Konsultasi</button>
</form>
@endsection
