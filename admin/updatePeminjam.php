<?php 
            require 'function/functionPeminjam.php';
            // ambil data di URL
            $id = $_GET["id"];
            
            // query data peserta berdasarkan id
            $filterPnjm = query("SELECT * FROM tbl_peminjaman WHERE id = $id")[0];


            // cek apakah tombol submit sudah ditekan atau belum
            if( isset($_POST["submitUpdate"]) ) {
                
                // cek apakah data berhasil diubah atau tidak
                if( ubah($_POST) > 0 ) {
                    echo "
                        <script>
                            alert('data berhasil diubah!');
                            document.location.href = 'dataPeminjam.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('data gagal diubah!');
                            document.location.href = 'dataPeminjam.php';
                        </script>
                    ";
                }

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Peminjaman</title>


<!-- Logo -->
<link rel="icon" href="../assets/img/logo.png">

    
<!-- MyStyle -->
<link rel="stylesheet" href="../assets/style/css/style.css">

<!-- Custom fonts for this template-->
<link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->


<!-- Custom styles for this template-->
<link href="../assets/style/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>


    <div class="w-50 m-5" style="margin-left: 400px !important;">
        <div class="card">
            <h5 class="card-header">Update Data Peminjaman</h5>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $filterPnjm["id"] ?>" >
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                        value="<?= $filterPnjm["judul"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $filterPnjm["nama"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nrp" class="form-label">nrp</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" value="<?= $filterPnjm["nrp"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="text" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $filterPnjm["tgl_pinjam"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                        <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $filterPnjm["tgl_kembali"] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="" class="w-100 form-control">
                            <option value=""><?= $filterPnjm["status_buku"] ?></option>
                            <option value="baik">Baik</option>
                            <option value="kurang baik">Kurang Baik</option>
                            <option value="buruk">Buruk</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan Buku</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $filterPnjm["keterangan"] ?>">
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="../dataPeminjam.php" class="btn btn-secondary">
                            Kembali
                        </a>
                        <button type="submit" name="submitUpdate" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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