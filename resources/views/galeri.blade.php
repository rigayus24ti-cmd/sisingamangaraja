@extends('layouts.app')

@section('content')

<style>
    /* ===== BACKGROUND SELURUH HALAMAN ===== */
    body {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        padding: 20px;
    }

    /* Judul */
    h1, h2 {
        font-weight: bold;
        color: #ffffff;
        text-align: center;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    /* Container background */
    .text-center {
        padding: 20px;
        background: rgba(181, 199, 199, 0.25);
        border-radius: 15px;
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0px 3px 12px rgba(0,0,0,0.12);
    }

    /* Gambar */
    img {
        border-radius: 15px;
        transition: 0.3s ease-in-out;
        width: 100%;
        height: 250px;
        object-fit: cover; /* 🔹 gambar rapi proporsional */
    }

    img:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 18px rgba(0,0,0,0.25);
    }

    /* Rapikan grid gambar */
    .row {
        max-width: 900px;
        margin: 0 auto;
    }

    .col-md-4 {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<h2 class="mb-3">Galeri Foto</h2>

<div class="row">

    <div class="col-md-4 mb-3">
        <img src="https://zjglidcehtsqqqhbdxyp.supabase.co/storage/v1/object/public/atourin/images/destination/samosir/makam-sisingamangaraja-profile1637501997.png?x-image-process=image/resize,p_100,limit_1/imageslim"
             class="img-fluid rounded shadow">
    </div>

    <div class="col-md-4 mb-3">
        <img src="https://lifepatch.id/images/thumb/5/5e/18xx_-_Stempel_Si_Singamangaraja_XII.jpg/300px-18xx_-_Stempel_Si_Singamangaraja_XII.jpg"
             class="img-fluid rounded shadow">
    </div>

    <div class="col-md-4 mb-3">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd9Dvkf8QBekeDfE7hr5_DNnh5KMLxL0yaTw&s"
             class="img-fluid rounded shadow">
    </div>

</div>


<h2 class="mb-3">TERIMAKASIH </h2>

@endsection
