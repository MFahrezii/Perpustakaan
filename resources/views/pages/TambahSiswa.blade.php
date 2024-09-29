@extends('layout-utama')

@section('css')
    <style>
        body {
            background-color: #E3FEF7;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h3 {
            color: #003C43;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .form-box {
            background-color: #003C43;
            padding: 40px;
            border-radius: 25px;
            color: #E3FEF7;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        input[type="text"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #E3FEF7;
            background-color: #E3FEF7;
            color: #003C43;
            font-size: 18px;
        }

        button[type="submit"] {
            background-color: #E3FEF7;
            color: #003C43;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            font-size: 18px;
        }

        button[type="submit"]:hover {
            background-color: #c0f0e8;
        }
    </style>
@endsection

@section('isi')
    <div class="container">
        <h3>Tambah Siswa</h3>
        <div class="form-box">
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input type="text" id="nis" name="nis" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telepon</label>
                    <input type="tel" id="no_telp" name="no_telp" required>
                </div>
                <div class="form-group">
                    <label for="kode_kelas">Kode Kelas</label>
                    <input type="text" id="kode_kelas" name="kode_kelas" required>
                </div>
                <button type="submit">Tambah Siswa</button>
            </form>
        </div>
    </div>
@endsection