<?php

require '../admin/function/functionBku.php';

    $dataBku = query("SELECT * FROM tbl_buku");
    $dataBrta = query("SELECT * FROM tbl_berita");


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan Sejahtera</title>
    <!-- Logo -->
    <link rel="icon" href="../assets/img/logo.png">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- MyStyle -->
    <link rel="stylesheet" href="../assets/style/css/index.css">


    <!-- Custom styles for this template-->
    <link href="../assets/style/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >

 <!-- Navbar -->
 <nav id="header" class="navbar navbar-expand-lg bg-light fixed-top text-dark bg-body-tertiary  shadow-sm" style="background-color:rgba(0, 0, 0, 0.5);">
  <div class="container-fluid" style="">
    <div class="pe-5" style="border-right: 2px solid gray;">
        <a id="textHeader" class="text-dark navbar-brand " href="#">Perpustakaan STT Sejahtera</a>
    </div>
    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa-solid fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar w-100 mx-auto">
        <a id="textHeader" class="text-dark nav-link " aria-current="page" href="#Hero">Home</a>
        <a id="textHeader" class="text-dark nav-link" href="#Buku">Data Buku</a>
        <a id="textHeader" class="text-dark nav-link " href="#kontak">Kontak</a>
        <a id="textHeader" class="text-dark nav-link " href="#berita">Berita</a>
      </div>
      <div class="d-flex justify-content-end w-100">
        <button class="btn btn-outline-success ms-2" type="submit">
            <a href="login.php">Login</a>
        </button>
      </div>
    </div>
  </div>
</nav>


<!-- Hero -->
<div id="Hero" class="container-fluid bg-opacity-25" style="background-image: url('../assets/img/bgHero.jpg'); width: 100%; background-repeat: no-repeat; background-position: center; background-size: cover; height: 100vh; backgeound-position: center;">
    <div class="mx-auto w-50 text-light p-5">
        <div class="m-5 pt-5 text-center">
            <h1 class="">Perpustakaan Dalam Genggaman</h1>
        </div>
    </div>
</div>

<!-- Data Buku -->
    <div id="Buku" class="container-fluid mx-auto text-center m-5">
        <div class="pb-5">
            <h1 class="mb-1">Data Buku</h1>
            <div class="container-fluid pb-5">
                <div class="d-flex flex-wrap">
                    <?php foreach ($dataBku as $row) : ?>
                    <div id="cardBku" class="card m-2 shadow" style="width: 18rem;">
                        <img src="../assets/img/buku/<?= $row["gambar"] ?>" class="card-img-top" height="200" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                Title : <?= $row["judul"] ?>
                            </h5>
                            <h5 class="card-title">
                                Author : <?= $row["penerbit"] ?>
                            </h5>
                            <p class="card-text">
                                Terbit Tahun : <?= $row["terbit"] ?>
                            </p>
                        </div>
                    </div>
                   <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

  <!-- Berita -->
  <div class="container-fluid" style="background-color:rgba(176,224,230, 0.5);">
    <div>
        <h1 class="p-2">Berita</h1>
    </div>
    <div class="d-flex flex-wrap">
        <div class="card w-50">
            <div class="card-header">
                
            </div>
            <div class="card-body">
                <img src="" alt="">
                <p>

                </p>
            </div>
        </div>
    </div>
  </div>


<!-- Kontak -->
<div id="kontak">
    <div class="text-center">
        <div class="card shadow mb-4 m-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kontak Kami</h6>
            </div>
            <div class="card-body w-100">
                <div class="d-flex flex-wrap ">
                    <div class="card shadow-md m-1" style="width: 49%;">
                        <div class="card-body">
                            <form action="" method="post">
                                    <div class="mb-3">
                                        <input type="text" class="form-control mb-2" id="nama" placeholder="Nama Lengkap">
                                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
                                    </div>
                                    <button type="submit" name="kirim" class="btn btn-primary w-100">Kirim</button>
                                </form>
                            </div>
                        </div>
                    <div class=" m-1" style="width: 49%;">
                        <div class="card-body">
                            <img src="../assets/img/bukuKontak.png" width="300" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="bg-primary">
    <div class="p-3 text-light text-center">
        <div>NAMA</div>
        <div>NAMA</div>
        <div>NAMA</div>
    </div>
</footer>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/style/js/sb-admin-2.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/style/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

     <!-- Page level custom scripts -->
    <script src="../assets/style/js/datatables-demo.js"></script>

    <!-- FontAwesome -->
    <script src="../assets/style/js/fontawesome.all.min.js"></script>

   

</body>

</html>