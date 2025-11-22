@extends('layouts.app')

@section('content')

<style>
    /* ===== BACKGROUND SELURUH HALAMAN ===== */
    body {
        background: linear-gradient(to right, #1e3c72, #2a5298);
        padding: 20px;
    }

    /* ===== CSS HALAMAN PEMBUKA ===== */

    h1, h2 {
        font-weight: bold;
        color: #ffffff;
        text-align: center;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    img {
        border-radius: 15px;
        transition: 0.3s ease-in-out;
    }

     .text-center {
        padding: 20px;
        background: rgba(181, 199, 199, 0.4);
        border-radius: 15px;
        max-width: 800px;
        margin: 0 auto;
        box-shadow: 0px 3px 12px rgba(0,0,0,0.12);
    }
    img:hover {
        transform: scale(1.05);
        box-shadow: 0px 6px 18px rgba(0,0,0,0.25);
    }

    /* Gambar dua menyamping dan di tengah */
    .image-row {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 20px 0;
    }

    p {
        font-size: 18px;
        color: #f1f1f1;
        max-width: 700px;
        margin: 20px auto;
        line-height: 1.7;
        text-align: center;
    }

</style>

<h2 class="mb-3">Perjuangan Melawan Penjajah</h2>

<div class="image-row">
    <img src="https://asset-2.tstatic.net/medan/foto/bank/images/perang-batak.jpg"
         class="img-fluid rounded shadow"
         alt="Sisingamangaraja XII" width="350">

    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKCasiEIvJIR3gK4pWDDRaVG1CflJji3ukYg&s"
         class="img-fluid rounded shadow"
         alt="Sisingamangaraja XII" width="350">


     <img src="https://ninamaulia.up.seesaa.net/image/Perang20Sisingamangaraja.jpg"
         class="img-fluid rounded shadow"
         alt="Sisingamangaraja XII" width="350">
</div>

<p>
   Perjuangan Sisingamangaraja XII melawan Belanda berlangsung selama 1878–1907. Strategi gerilya yang digunakan sangat efektif karena memanfaatkan hutan dan pegunungan sebagai perlindungan alami untuk menyerang dan bertahan. Dengan dukungan rakyat serta semangat mempertahankan tanah leluhur, ia mampu memberikan perlawanan sengit terhadap penjajah. Dalam perjuangannya, Sisingamangaraja XII terus berpindah dari satu wilayah ke wilayah lain untuk menghindari pengepungan Belanda, sekaligus mengatur serangan balasan yang membuat pasukan kolonial kewalahan. Keteguhannya dalam mempertahankan kedaulatan dan kebebasan masyarakat Batak menjadikannya simbol keberanian dan keteladanan bagi generasi berikutnya.

<p>
    Walaupun akhirnya gugur, perjuangannya memberikan inspirasi bagi bangsa Indonesia.
</p>

@endsection
