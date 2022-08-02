<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menjakin Kasih</title>

    <!--<link rel="icon" type="image/png" href="Gambar/iconTransparan.png" />-->
    <link rel="shorcut icon" type="x-icon" href="/assets/gambar/iconTransparan1.png" />
    <link rel="stylesheet" type="text/css" href="/public/assets/css/style.css" />

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">



</head>
  <body>
 <!--Navbar-->
 <nav class="navbar fixed navbar-expand-lg sticky">
      <div class="container">
        <a class="navbar-brand" href="/beranda">  
          <img src="/assets/gambar/iconTransparan.png" height="80" width="150" />
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="ultext navbar-nav">
            <li class="nav-item mx-2">
              <a href="/beranda" class="nav-link text-black"><b>Beranda</b></a>
            </li>
            <li class="nav-item dropdown text-black">
              <a class="nav-link dropdown-toggle text-black" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>Program</b>
              </a>
              <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink text-black">
                <li><a class="dropdown-item" href="/pm">Pemberdayaan Manusia</a></li>
                <li><a class="dropdown-item" href="/donasi">Donasi</a></li>
                <li><a class="dropdown-item" href="/relawan">Relawan</a></li>
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a href="/produk" class="nav-link text-black"><b>Produk</b></a>
            </li>
            <li class="mx-2">
              <a href="/masuk" type="button" class="btn ms-2 text-success" style="border-radius: 30px" width="350px"><b>Masuk</b></a>
            </li>
            <li class="mx-2">
              <a href="/daftar" type="button" class="btn btn-outline ms-1 bg-success text-white" style="border-radius: 30px" ><b>Daftar</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->

    @yield('pm')
    @yield('produk')
    @yield('relawan')
    @yield('donasi')

  <!-- Footer -->
    <footer class="text-center text-lg-start mt-xl-5 pt-4">

<div class="containercontainer-fluid p-4" style="background-color: #176640">
  <div class="row align-items-start">
  <div class="col">
       <img src="/assets/gambar/MKTransparent.png" height="120px" width="180px">
       <h3 class="text-white">Menjalin Kasih </h3>
       <h5 class="text-white">Menjalin Satu Kasih Untuk Sejuta Berkat</h5>
    </div>
    <div class="col">
      <div class="row align-items-start">
        <div class="col">
          <div class="col">
            <h5 class="text-white">Jalur Kasih</h5>

            <ul class="list-unstyled mb-9">
              <li>
                <a href="#!" class="text-white">Donasi</a>
              </li>
              <li>
                <a href="#!" class="text-white">Relawan</a>
              </li>
              <li>
                <a href="#!" class="text-white">Merchandise</a>
              </li>
              <li>
                <a href="#!" class="text-white">Hasil Karya</a>
              </li>
              <li>
                <a href="#!" class="text-white">Pelatihan</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col">
          <div class="col">
            <h5 class="text-white">Kontak Kami</h5>

            <ul class="list-unstyled mb-9">
              <li>
                <span><button type="button" class="btn btn-primary-outlin text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                </button></span>
                <span href="#!" class="text-white">marimenjalinkasih@gmail.com</span>
                
              </li>
              <li>
                <span><button type="button" class="btn btn-primary-outlin text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                    />
                  </svg>
                </button></span>
                <span href="#!" class="text-white">menjalinkasih</span>
                
              </li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
   
  </div>
  <div class="text-center">
   © 2022 Menjalin Kasih | Copyright :
  <a class="text-white" href="">MenjalinKasih.co.id</a> 
  </div>
  
</div> 
</footer>
<!-- Akhir Footer -->

<!-- Js Bootsrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
window.onscroll = function() {myFunction()};

var widget = document.getElementById('nav');
var sticky = widget.offsetTop;

function myFunction(){
if (window.pageYOffset >= sticky){
  widget.classList.add("sticky")
} else{
  widget.classList.remove("sticky");
}
}
</script>
</body>
</html>
