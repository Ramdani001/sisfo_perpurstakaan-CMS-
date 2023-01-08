<?php 
require '../admin/function/functionUsers.php';

if( isset($_POST["register"]) ) {

	if( register($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
				window.location = 'login.php';  
			</script>";  
	} else {
		echo mysqli_error($conn);
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

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- MyStyle -->
    <link rel="stylesheet" href="../assets/style/css/style.css">


    <!-- Custom styles for this template-->
    <link href="../assets/style/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">

        <div class="col-xl-10 col-lg-12 col-md-9 shadow">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Bergabung</h1>
                                </div>
                                <form action="" method="post" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="nama" aria-describedby="nama"
                                            placeholder="Nama Lengkap" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="npm" class="form-control form-control-user"
                                            id="npm" placeholder="npm" name="npm" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="email" placeholder="Alamat Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" placeholder="Masukan Password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tempat_lahir" class="form-control form-control-user"
                                            id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-user"
                                            id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="jk" placeholder="Jenis Kelamin" name="jk">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="prodi" placeholder="prodi" name="prodi">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="register">
                                        Daftar
                                    </button>
                                    <hr>
                                 
                            </div>
                        </div>
                    </div>
                </div>
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