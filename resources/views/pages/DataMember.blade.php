@extends('layout-utama')

@section('css')
    <style>
        body{
            background-color:#E3FEF7
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
            justify-content: flex-start; /* Mengatur agar tombol di kiri */
            margin-bottom: 20px;
        }
        .search-bar input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 20px 0 0 20px; /* Membulatkan sisi kiri tombol */
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: -1px; /* Menghilangkan border ganda antara tombol dan input */
        }
        .search-bar input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;/* Membulatkan sisi kanan input */
            width: 300px;
            outline: none;
        }
        .member-box {
            background-color: #003C43; /* Background kotak data member */
            padding: 20px;
            border-radius: 20px;
            color: #E3FEF7; /* Warna teks di dalam kotak */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .member-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background-color: #E3FEF7; /* Background tabel data member */
            color: #003C43; /* Warna teks dalam tabel */
        }
        .member-table th, .member-table td {
            padding: 10px;
            text-align: center;
        }
        .member-table th {
            background-color: #003C43; /* Background header tabel */
            color: #E3FEF7; /* Warna teks header tabel */
            border-top: 2px solid#003C43 ;
        }
        .add-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px; /* Menambahkan jarak atas */
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
    <h3>Data Member</h3>
    <div class="member-box">
        <table class="member-table">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Kode Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nis }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->no_telp }}</td>
                    <td>{{ $s->kode_kelas }}</td>
                    <td style="text-align: center;">
                        <a href="/DataMember/edit/{{ $s->nis }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/DataMember/hapus/{{ $s->nis }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top: 20px;">
            <a href="/DataMember/tambah" class="add-button">Tambah</a>
        </div>
    </div>
</div>
@endsection

@section('name')
    
@endsection