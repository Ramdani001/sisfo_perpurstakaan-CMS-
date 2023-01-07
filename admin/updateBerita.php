<?php 
            require 'function/functionBerita.php';
            // ambil data di URL
            $id = $_GET["id"];
            
            // query data peserta berdasarkan id
            $filterBrta = query("SELECT * FROM tbl_berita WHERE id = $id")[0];


            // cek apakah tombol submit sudah ditekan atau belum
            if( isset($_POST["submitUpdate"]) ) {
                
                // cek apakah data berhasil diubah atau tidak
                if( ubah($_POST) > 0 ) {
                    echo "
                        <script>
                            alert('data berhasil diubah!');
                            document.location.href = 'berita.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('data gagal diubah!');
                            document.location.href = 'berita.php';
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
            <h5 class="card-header">Update Data Berita</h5>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $filterBrta["id"] ?>" >
                <input type="hidden" name="gambar" value="<?= $filterBrta["gambar"] ?>" >
                    <div class="mb-3">
                        <label for="title" class="form-label">title Berita</label>
                        <input type="text" class="form-control" id="title" name="title"
                        value="<?= $filterBrta["title"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">content</label>
                        <input type="text" class="form-control" id="content" name="content" value="<?= $filterBrta["content"] ?>">
                    </div>
                    
                    <div class="mb-3">
                        <img src="../assets/img/berita/<?= $filterBrta["gambar"]?>" width="200" alt="">
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