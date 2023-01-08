<?php 
require './function/functionBerita.php';

$dataBerita = query("SELECT * FROM tbl_berita");

if( isset($_POST["submit"]) ) {
    
        if( tambah($_POST) > 0 ){
            echo"
                <script>
                    alert('Data Berita Tersimpan');
                    document.location.href = 'berita.php';
                </script>
            ";
        } else {
            echo"
                <script>
                    alert('Data Berita Tidak Tersimpan!!!');
                    document.location.href = 'berita.php';
                </script>
            ";
        }
        
    }
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

    
    <!-- MyStyle -->
    <link rel="stylesheet" href="../assets/style/css/style.css">

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="../assets/style/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dataBuku.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../assets/img/logo.png" width="50" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">
                    STT Sejahtera
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Data Buku Menu -->
            <li class="sidebarMenu nav-item">
                <a class="nav-link" href="dataBuku.php">
                    <i class="fa-solid fa-book"></i>
                    <span>Data Buku</span>
                </a>
            </li>

            <!-- Nav Item - Data Users Menu -->
            <li class="sidebarMenu nav-item">
                <a class="nav-link" href="dataUsers.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Data Users</span>
                </a>
            </li>

            <!-- Nav Item - Data Peminjam Menu -->
            <li class="sidebarMenu nav-item">
                <a class="nav-link" href="dataPeminjam.php">
                    <i class="fa-solid fa-clipboard"></i>
                    <span>Data Peminjam</span>
                </a>
            </li>

            <!-- Nav Item - Pesan Kontak Menu -->
            <li class="sidebarMenu nav-item">
                <a class="nav-link" href="pesan.php">
                    <i class="fa-regular fa-comments"></i>
                    <span>Pesan</span>
                </a>
            </li>

            <!-- Nav Item - Berita Menu -->
            <li class="sidebarMenu nav-item active">
                <a class="nav-link" href="berita.php">
                <i class="fa-regular fa-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li class="sidebarMenu nav-item">
                <a class="nav-link" href="../landingPage/index.php">
                <img src="../assets/img/iconWeb1.png" width="30" alt="">
                    <span>Landing Page</span>
                </a>
            </li>
        
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  <!-- PerpusHeader -->
                  <h1>Perustakaan STT Sejahtera</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                    <!-- Modal Tambah -->
                    <div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="TambahLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="TambahLabel">Tambah Data Buku</h1>
                        </div>
                        <div class="modal-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                        >
                                    </div>
                                    
                                    <div class="mb-3">
                                        <textarea name="content" id="pesan" cols="40" rows="2" placeholder="Content Berita"></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="gambar" class="form-label">Cover</label>
                                        <br>
                                        <input type="file" name="gambar">
                                    </div>
                                    
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                   
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables Berita</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Tambah" >
                                Tambah
                        </button>
                    </div>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Berita</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                <?php $No =1; ?>
                                    <?php foreach ($dataBerita as $row) : ?>
                                    <tr>
                                        <td>
                                            <?= $No; ?>
                                        </td>
                                        <td>
                                            <?= $row["title"]; ?>
                                        </td>
                                        <td>
                                            <?= $row["content"]; ?>
                                        </td>
                                        <td>
                                            <img src="../assets/img/berita/<?= $row["gambar"]; ?>" width="40" alt="">
                                        </td>
                                        <td class="d-flex ">
                                                <div class="mb-4 d-flex flex-row w-100 justify-content-center">
                                                <a type="button" class="btn btn-primary" href="updateBerita.php?id=<?= $row["id"]; ?>">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <a href="deleteBerita.php?id=<?= $row["id"]; ?>" class="btn btn-primary">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </div>
                                        </td>
                                    </tr>          
                                    <?php $No++; ?>                      
                                    <?php endforeach; ?>                      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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