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
        .search-bar {
            justify-content: center;
            margin-bottom: 30px;
            margin-top: 40px;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 20px 0 0 20px; /* Membulatkan sisi kiri */
            width: 400px;
            outline: none;
            color: #E3FEF7;
            background-color: #003C43;
        }
        .search-bar input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 0 20px 20px 0; /* Membulatkan sisi kanan */
            background-color: #003C43;
            color: #E3FEF7;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-bar input[type="submit"]:hover {
            background-color: #77B0AA;
        }
        .book-shelf {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .book {
            background: #003C43; /* Warna latar belakang buku */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
            color: #E3FEF7; /* Warna teks buku */
        }
        .book img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .book h2 {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .book p {
            margin: 5px 0;
            color: #E3FEF7; /* Warna teks buku */
        }
    </style>
@endsection

@section('isi')
<div class="container">
    <div class="search-bar">
        <form action="#" method="get">
            <input type="text" name="search" placeholder="Cari buku..." aria-label="Cari buku">
            <input type="submit" value="Cari">
        </form>
    </div>
    <div class="book-shelf">
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 1">
            <h2>Judul Buku 1</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2023</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 2">
            <h2>Judul Buku 2</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2022</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 3">
            <h2>Judul Buku 3</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2021</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 4">
            <h2>Judul Buku 4</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2020</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 5">
            <h2>Judul Buku 5</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2019</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 6">
            <h2>Judul Buku 6</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2018</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 7">
            <h2>Judul Buku 7</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2017</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 8">
            <h2>Judul Buku 8</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2016</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 9">
            <h2>Judul Buku 9</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2015</p>
        </div>
        <div class="book">
            <img src="https://via.placeholder.com/200x300" alt="Judul Buku 10">
            <h2>Judul Buku 10</h2>
            <p>Penulis: Nama Penulis</p>
            <p>Tahun: 2014</p>
        </div>
    </div>
</div>
@endsection

@section('name')
    
@endsection