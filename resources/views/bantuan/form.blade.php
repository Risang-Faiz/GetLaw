@extends('layouts.app')

@section('title', 'Form Permohonan Bantuan Hukum')

@section('content')
<h1>Permohonan Bantuan Hukum</h1>
<form action="{{ route('bantuan.store') }}" method="POST">
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
        <label for="kebutuhan_bantuan" class="form-label">Kebutuhan Bantuan Hukum</label>
        <textarea name="kebutuhan_bantuan" class="form-control" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim Permohonan</button>
</form>
@endsection

