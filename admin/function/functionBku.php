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


    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $terbit = $data["terbit"];
    $isbn = htmlspecialchars($data["isbn"]);

    // Upload Gambar
    $gambar= upload();
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO tbl_buku
                    VALUES
            ('', '$judul', '$pengarang', '$penerbit', '$lokasi', '$terbit', '$isbn', '$gambar')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];


    // Cek apakah tidak ada gambar yang diupload
    if( $error === 4 ){
        echo "
            <script>
                alert('Upload Cover Buku Terlebih Dahulu!);
            </script>";
            return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Ukuran Gambar Terlalu Besar!');
              </script>";
    }

    // Lolos pengecekan, gambar siap diupload
    // Generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../assets/img/buku/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $terbit = $data["terbit"];
    $isbn = htmlspecialchars($data["isbn"]);
    $gambarLama = htmlspecialchars($data["gambar"]);

    // Cek Apakah Admin upload gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE tbl_buku SET
                judul = '$judul',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                lokasi = '$lokasi',
                terbit = '$terbit',
                isbn = '$isbn',
                gambar = '$gambar'
              WHERE id = $id
            ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}


?>