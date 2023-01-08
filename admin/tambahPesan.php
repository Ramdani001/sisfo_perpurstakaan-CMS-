<?php 
$conn = mysqli_connect("localhost:3307", "root", "", "db_perpus");


   function tambah(){
        global $conn;


        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $pesan = htmlspecialchars($_POST["pesan"]);
        
        

        $query = "INSERT INTO tbl_pesan
                        VALUES
                ('', '$nama', '$email', '$pesan')
        ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);

   }

    if( tambah($_POST) > 0 ){
        echo"
            <script>
                alert('Pesan Terkirim');
                document.location.href = '../landingPage/indexUsers.php';
            </script>
        ";
    } else {
        echo"
            <script>
                alert('Pesan Tidak Terkirim!!!');
                document.location.href = '../landingPage/indexUsers.php';
            </script>
        ";
    }

?>