<?php 
            require 'function/functionBku.php';
            // ambil data di URL
            $id = $_GET["id"];
            
            // query data peserta berdasarkan id
            $filterBku = query("SELECT * FROM tbl_buku WHERE id = $id")[0];


            // cek apakah tombol submit sudah ditekan atau belum
            if( isset($_POST["submitUpdate"]) ) {
                
                // cek apakah data berhasil diubah atau tidak
                if( ubah($_POST) > 0 ) {
                    echo "
                        <script>
                            alert('data berhasil diubah!');
                            document.location.href = 'dataBuku.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('data gagal diubah!');
                            document.location.href = 'dataBuku.php';
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
    <title>Update Data</title>


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
            <h5 class="card-header">Update Data</h5>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $filterBku["id"] ?>" >
                <input type="hidden" name="gambar" value="<?= $filterBku["gambar"] ?>" >
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul"
                        value="<?= $filterBku["judul"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $filterBku["pengarang"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $filterBku["penerbit"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi Buku</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $filterBku["lokasi"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="terbit" class="form-label">Tahun Terbit</label>
                        <input type="date" class="form-control" id="terbit" name="terbit" name="tl" value="<?= $filterBku["terbit"]; ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn"
                        value="<?= $filterBku["isbn"] ?>"
                        >
                    </div>
                    
                    <div class="mb-3">
                        <img src="../assets/img/buku/<?= $filterBku["gambar"]?>" width="200" alt="">
                        <br>
                        <br>
                        <input type="file" id="cover" name="gambar">
                        
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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