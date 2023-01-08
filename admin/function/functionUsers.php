<?php 

$conn = mysqli_connect("localhost:3307", "root", "", "db_perpus");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;


    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);
    

    $query = "INSERT INTO tbl_users
                    VALUES
            ('', '$npm', '$nama', '$email', '$password', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_users WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function register($data) {
	global $conn;

	$npm = strtolower(stripslashes($data["npm"]));
	$nama = strtolower(stripslashes($data["nama"]));
	$email = strtolower(stripslashes($data["email"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
    $tempat_lahir = strtolower(stripslashes($data["tempat_lahir"]));
    $tgl_lahir = strtolower(stripslashes($data["tgl_lahir"]));
    $jk = strtolower(stripslashes($data["jk"]));
    $prodi = strtolower(stripslashes($data["prodi"]));

	// cek npm sudah ada atau belum
	$result = mysqli_query($conn, "SELECT npm FROM tbl_users WHERE npm = '$npm'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('NPM sudah terdaftar!')
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO tbl_users 
                            VALUES
                ('', '$npm', '$nama', '$email','$password', '$tempat_lahir', '$tgl_lahir', '$jk', '$prodi')");

	return mysqli_affected_rows($conn);

}

?>