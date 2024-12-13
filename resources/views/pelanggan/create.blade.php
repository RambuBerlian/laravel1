@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pelanggan</h1>
    <form method="POST" action="{{ route('pelanggan.store') }}">
        @csrf
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nomor Kontak</label>
            <input type="text" name="nomor_kontak" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Simpan</button>
    </form>
</div>
@endsection
