@extends('template')
@section('donasi')

    <!-- Konten -->
    <!--Slide-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active gambar-slide">
         <img src="/assets/gambar/donasi.jpg" class="d-block"  height="720px" width="1550px"/> 
          <div class="carousel-caption d-none d-md-block">
            <div class="content text-center" style="margin-bottom: 250px">
              <h2 class="text-white text-opacity-75">Welcome To</h2>
              <h1 class="judul">MENJALIN KASIH</h1>
            </div>
          </div>
        </div>
        <div class="carousel-item gambar-slide2">
          <img src="/assets/gambar/donasi2.jpg" class="d-block"  height="720px" width="1550px"/> 
          <div class="carousel-caption d-none d-md-block">
            <h5>Total Donasi</h5>
            <p>Rp 0,00- /bulan</p>
          </div>
        </div>
        <div class="carousel-item gambar-slide3">
          <img src="/assets/gambar/beranda2.jpg" class="d-block"  height="720px" width="1550px"/> 
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

    <!-- donasi-->

    <!-- akhir donasi -->
<br>
<br>
    <div class="container "> 
    <div class="mb-3">
      <h3 class="text-center Wtext"> Mari Berdonasi </h3>
      <p>MenjalinKasih menyediakan layanan dimana donatur dapat mengatur sendiri persenan yang ingin dia berikan kepada pihak MenjalinKasih, menjalinkasih juga akan memberikan pelatihan keterampilan kepada masyarakat penerima kasih dengan harapan di kemudian hari masyarakat ini bisa memenuhi kebutuhan hidupnya sendiri. MenjalinKasih menyediakan layanan dimana donatur dapat mengatur sendiri persenan yang ingin dia berikan kepada pihak MenjalinKasih, menjalinkasih juga akan memberikan pelatihan keterampilan kepada masyarakat penerima kasih dengan harapan di kemudian hari masyarakat ini bisa memenuhi kebutuhan hidupnya sendiri.
    </p>
    </div>
    <button type="submit" class="btn btn-success">Donasi</button>     
    </div>

    <!-- Akhir Konten -->

@endsection
