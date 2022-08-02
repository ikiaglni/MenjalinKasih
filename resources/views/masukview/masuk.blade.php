<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk</title>
    <link rel="shorcut icon" type="x-icon" href="/assets/gambar/iconTransparan1.png" />
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


</head>

<body>

 <!--Navbar-->
 <nav class="navbar fixed navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index Login.html">
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

    <div class="container  mt-5" >
            <div class="row">
                <div class="col-sm-6 offset-sm-3">

                    <div class="card">
                        <h2 class= "text-center card-header">Masuk</h2>
                        <div class="card-body">
                            <form> 
                                <div class="form-group">

                                <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" placeholder="email@contoh" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" placeholder="******" id="exampleInputPassword1">
                                <div class="invalid-feedback">
                                    Kata sandi tidak boleh kosong
                                </div>
                                </div>

                                <br>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" id="" class="btn btn-success col-3" >Masuk
                                </button>
  
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <div class="text-center">
         © 2022 Menjalin Kasih | Copyright :
        <a class="text-black" href="/beranda">MenjalinKasih.co.id</a> 
        </div>
</footer>

    <!-- Js Bootsrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>