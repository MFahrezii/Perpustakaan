@extends('layout-utama')

@section('css')
    <style>
        body {
            background-color: #E3FEF7;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h3 {
            color: #003C43;
            margin-bottom: 30px;
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
        input[type="number"],
        textarea,
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
        <h3>Edit Buku</h3>
        <div class="form-box">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kode_buku">Kode Buku</label>
                    <input type="text" id="kode_buku" name="kode_buku" value="{{ $buku->kode_buku }}" readonly>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ $buku->judul }}" required>
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                </div>
                <div class="form-group">
                    <label for="tahun_terbit">Tahun Terbit</label>
                    <input type="number" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" value="{{ $buku->kategori }}" required>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea id="sinopsis" name="sinopsis" rows="4" required>{{ $buku->sinopsis }}</textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto">
                    <p>Foto saat ini: {{ $buku->foto }}</p>
                </div>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>
@endsection
