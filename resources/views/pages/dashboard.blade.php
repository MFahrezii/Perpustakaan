@extends('layout-utama')

@section('css')
    <style>
        body{background-color:#E3FEF7}

        .full-height {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .outer-card {
            display: flex;
            flex-direction: column;
            gap: 1.5rem; 
            width: 1000px; 
            height: 700px; 
            padding: 20px; 
            margin-top: 100px;
            background-color: #003C43; 
            border: 1px solid #dee2e6; 
            border-radius: .5rem; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); 
            overflow: hidden; 
        }
        .row {
            display: flex;
            flex: 1; 
            gap: 1rem; 
        }
        .inner-card {
            flex: 1; 
            background-color: #E3FEF7; 
            border: 1px solid #dee2e6; 
            border-radius: .5rem; 
            display: flex;
            flex-direction: column;
            padding: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            
            min-width: 0; 
        }
        .row > .inner-card {
            margin: 0 10px; 
        }
    </style>
@endsection

@section('isi')
<div class="full-height">
    <div class="outer-card">
        <div class="row">
            <!-- Baris Pertama: Dua Kotak Samping -->
            <div class="inner-card">
                <h5 class="card-title">Judul Kotak 1</h5>
                <p class="card-text">Ini adalah teks konten di dalam kotak 1.</p>
            </div>
            <div class="inner-card">
                <h5 class="card-title">Judul Kotak 2</h5>
                <p class="card-text">Ini adalah teks konten di dalam kotak 2.</p>
            </div>
        </div>
        <div class="row">
            <!-- Baris Kedua: Dua Kotak di Bawah -->
            <div class="inner-card">
                <h5 class="card-title">Judul Kotak 3</h5>
                <p class="card-text">Ini adalah teks konten di dalam kotak 3.</p>
            </div>
            <div class="inner-card">
                <h5 class="card-title">Judul Kotak 4</h5>
                <p class="card-text">Ini adalah teks konten di dalam kotak 4.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('name')
    
@endsection