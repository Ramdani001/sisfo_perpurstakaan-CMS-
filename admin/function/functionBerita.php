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


    $title = htmlspecialchars($data["title"]);
    $content = htmlspecialchars($data["content"]);
    $gambar = htmlspecialchars($data["gambar"]);
    

    // Upload Gambar
    $gambar= upload();
    if( !$gambar ){
        return false;
    }

    $query = "INSERT INTO tbl_berita
                    VALUES
            ('', '$title', '$content', '$gambar')
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

    move_uploaded_file($tmpName, '../assets/img/berita/' . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"]; 
    $title = htmlspecialchars($data["title"]);
    $content = htmlspecialchars($data["content"]);
    $gambarLama = htmlspecialchars($data["gambar"]);

    // Cek Apakah Admin upload gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE tbl_berita SET
                title = '$title',
                content = '$content',
                gambar = '$gambar'
              WHERE id = $id
            ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}


?>