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
    </style>
@endsection

@section('isi')
<div class="container">
    <h3>Data Member</h3>
    <div class="member-box">
        <table class="member-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Dani</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Braga</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Dava</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Dolly</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Dwi</td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>Dzar</td>
                </tr>
                <tr>
                    <td>007</td>
                    <td>Ilham</td>
                </tr>
                <tr>
                    <td>008</td>
                    <td>Kezia</td>
                </tr>
                <tr>
                    <td>009</td>
                    <td>Fauzi</td>
                </tr>
                <tr>
                    <td>010</td>
                    <td>Fahrezi</td>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Rama</td>
                </tr>
                <tr>
                    <td>012</td>
                    <td>Riyan</td>
                </tr>
                <tr>
                    <td>013</td>
                    <td>Shafira</td>
                </tr>
                <tr>
                    <td>014</td>
                    <td>Siti</td>
                </tr>
                <tr>
                    <td>015</td>
                    <td>Tiara</td>
                </tr>
                <tr>
                    <td>016</td>
                    <td>Yosep</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('name')
    
@endsection