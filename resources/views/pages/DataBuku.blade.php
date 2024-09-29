@extends('layout-utama')

@section('css')
    <style>
        body {
            background-color: #E3FEF7
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h3 {
            margin-top: 20px;
            margin-bottom: 20px;
            color: #003C43;
        }

        .search-bar {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 20px;
        }

        .search-bar input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 20px 0 0 20px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: -1px;
        }

        .search-bar input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 300px;
            outline: none;
        }

        .member-box {
            background-color: #003C43;
            padding: 20px;
            border-radius: 20px;
            color: #E3FEF7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .member-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #E3FEF7;
            color: #003C43;
        }

        .member-table th,
        .member-table td {
            padding: 10px;
            text-align: center;
        }

        .member-table th {
            background-color: #003C43;
            color: #E3FEF7;
            border-top: 2px solid#003C43;
        }

        .add-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            margin-bottom: 20px;
            text-decoration: none;
            display: inline-block;
        }

        .add-button:hover {
            background-color: #0056b3;
        }
    </style>
@endsection

@section('isi')
    <div class="container">
        <h3>Data Buku</h3>
        <div class="member-box">
            <table class="member-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Kode Buku</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bukus as $buku)
                    <tr>
                        <td><img src="{{ asset('images/'.$buku->foto) }}" alt="{{ $buku->judul }}" width="50"></td>
                        <td>{{ $buku->kode_buku }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->penerbit }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->kategori }}</td>
                        <td>
                            <a href="/DataBuku/edit/{{ $buku->kode_buku }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/DataBuku/hapus/{{ $buku->kode_buku }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="margin-top: 20px;">
                <a href="/DataBuku/tambah" class="add-button">Tambah</a>
            </div>
        </div>
    </div>
@endsection

@section('name')
@endsection
