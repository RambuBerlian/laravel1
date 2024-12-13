@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Pelanggan</h1>
    <form method="POST" action="{{ route('pelanggan.update', $pelanggan->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $pelanggan->nama) }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $pelanggan->alamat) }}" required>
        </div>
        <div class="form-group">
            <label>Nomor Kontak</label>
            <input type="text" name="nomor_kontak" class="form-control" value="{{ old('nomor_kontak', $pelanggan->nomor_kontak) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-2">Perbarui</button>
    </form>
</div>
@endsection
