@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Data Pelanggan</h1>
    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    <a href="{{ route('transaction-cetak') }}" class="btn btn-primary">Pdf</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->nomor_kontak }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Internal CSS -->
<style>
/* Latar Halaman dan Kontainer */
.container {
    background-color: #ffe6f7;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Judul Halaman */
h1 {
    color: #ff69b4;
    text-align: center;
    margin-bottom: 20px;
}

/* Tombol */
.btn {
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-primary {
    background-color: #ff69b4;
    color: white;
}

.btn-warning {
    background-color: #ffb6c1;
    color: white;
}

.btn-danger {
    background-color: #e91e63;
    color: white;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(255, 105, 180, 0.3);
}

/* Tabel */
.table {
    background: #fff0f5;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
}

.table th {
    background-color: #ff69b4;
    color: white;
    text-align: center;
}

.table tbody tr:hover {
    transform: scale(1.05);
}

/* Style Barisan Tabel */
.table td {
    text-align: center;
    padding: 10px;
}

/* Konfirmasi Hapus Tombol */
form button {
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 14px;
}
</style>

@endsection
