@extends('layouts.app')

@section('content')

<style>
    /* ===== BACKGROUND SELURUH HALAMAN ===== */
    body {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        padding: 20px;
    }

    /* ===== CSS HALAMAN PEMBUKA ===== */

    h1 {
        font-weight: bold;
        color: #ffffff;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
    }

    img {
        border-radius: 15px;
        transition: 0.3s ease-in-out;
    }

    img:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 18px rgba(0,0,0,0.25);
    }

    p {
        font-size: 18px;
        color: #f1f1f1;
        max-width: 700px;
        margin: 20px auto;
        line-height: 1.7;
    }

    .text-center {
        padding: 20px;
        background: rgba(181, 199, 199, 0.4);
        border-radius: 15px;
        max-width: 800px;
        margin: 0 auto;
        box-shadow: 0px 3px 12px rgba(0,0,0,0.12);
    }

    .btn-lanjut:hover {
        background-color: #10a3a8ff;
        transform: scale(1.05);
    }
</style>

<div class="text-center">
    <b>
    <h1 class="mb-4">Pahlawan Nasional: Sisingamangaraja XII</h1>
    </b>

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWRkSkYbSBX1rW9HFmdEOVlUdHG_0qbgudoQ&s"
         class="img-fluid rounded shadow"
         alt="Sisingamangaraja XII" width="350">

    <p class="mt-4">
        Sisingamangaraja XII adalah pahlawan dari Tanah Batak yang berjuang puluhan tahun 
        melawan penjajahan Belanda, dan dikenal sebagai sosok yang berani, bijaksana, dan 
        menjadi inspirasi bagi masyarakat Batak.
    </p>
</div>

{{-- ====== PESAN SESSION TAMBAH DI BAWAHNYA ====== --}}
@if(session('nama_kelas'))
    <p class="text-center" style="color:white; font-size:18px;">
        Halo, {{ session('nama_kelas') }}! Selamat membaca! 📚
    </p>
@endif

@endsection
