@extends('template')
@section('relawan')

<link rel="stylesheet" type="text/css" href="/assets/css/relawan.css" />

    <!-- Konten -->
    <!--Slide-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner ">
        <div class="carousel-item active gambar-slide">
         <img src="/assets/gambar/relawan3.jpg" class="d-block"  height="720px" width="1550px"/> 
          <div class="carousel-caption d-none d-md-block">
            <div class="content text-center" style="margin-bottom: 250px">
              <h2 class="text-white text-opacity-75">Welcome To </h2>
              <h1 class="text-light">MENJALIN KASIH</h1>
            </div>
          </div>
        </div>
        <div class="carousel-item gambar-slide2">
          <img src="/assets/gambar/relawan2.jpg" class="d-block"  height="720px" width="1550px"/> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Total Donasi</h5>
            <p>Rp 0,00- /bulan</p>
          </div>
        </div>
        <div class="carousel-item gambar-slide3">
          <img src="/assets/gambar/relawan4.jpeg" class="d-block"  height="720px" width="1550px"/> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Donatur Tergabung</h5>
            <p>00000</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Akhir Slide -->

    <!-- relawan-->
    <div class="container mt-5">
      <h3 class="Wtext text-center">
        <b>Relawan</b></h3>
      <br>
      <hr class="hrJudul my-3" />
      <div class="wrapper">
        <div class="item" style="background-image: url(/assets/gambar/bagi.jpg)">
          <h2 class="text-white mt-2 ms-2">Bagi Makanan</h2>
        </div>
        <div class="item" style="background-image: url(/assets/gambar/masakkkk.jpeg)" height="1580px" width= "380px">
          <h2 class="text-white mt-2 ms-2">Memasak</h2>
        </div>
        <div class="item" style="background-image: url(/assets/gambar/latih.jpg)"height="880px" width= "80px">
        <h2 class="text-white mt-2 ms-2">Pelatihan</h2>
        </div>
        <div class="item" style="background-image: url(/assets/gambar/umkm.jpg)" height="580px" width= "380px">
          <h2 class="text-white mt-2 ms-2">UMKM</h2>
        </div>
        
        
      </div>
    </div>

    <!-- akhir relawan-->
    
    <br></br>
    <div class="container "> 
    <div class="mb-3">
      <h3 class="text-center Wtext">Bergabung Bersama Menjalin Kasih </h3>
      <p>MenjalinKasih menyediakan layanan dimana donatur dapat mengatur sendiri persenan yang ingin dia berikan kepada pihak MenjalinKasih, menjalinkasih juga akan memberikan pelatihan keterampilan kepada masyarakat penerima kasih dengan harapan di kemudian hari masyarakat ini bisa memenuhi kebutuhan hidupnya sendiri. MenjalinKasih menyediakan layanan dimana donatur dapat mengatur sendiri persenan yang ingin dia berikan kepada pihak MenjalinKasih, menjalinkasih juga akan memberikan pelatihan keterampilan kepada masyarakat penerima kasih dengan harapan di kemudian hari masyarakat ini bisa memenuhi kebutuhan hidupnya sendiri.
    </p>
    </div>
    <button type="submit" class="btn btn-success">Bergabung</button>     
    </div>

    <!-- Akhir Konten -->

@endsection
