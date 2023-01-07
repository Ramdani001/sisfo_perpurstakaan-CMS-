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
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $status = htmlspecialchars($data["status"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    

    $query = "INSERT INTO tbl_peminjaman
                    VALUES
            ('', '$judul', '$nama', '$nrp', '$tgl_pinjam', '$tgl_kembali', '$status', '$keterangan')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_peminjaman WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $tgl_pinjam = htmlspecialchars($data["tgl_pinjam"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $status = htmlspecialchars($data["status"]);
    $keterangan = htmlspecialchars($data["keterangan"]);

    $query = "UPDATE tbl_peminjaman SET
                judul = '$judul',
                nama = '$nama',
                nrp = '$nrp',
                tgl_pinjam = '$tgl_pinjam',
                tgl_kembali = '$tgl_kembali',
                status_buku = '$status',
                keterangan = '$keterangan'
              WHERE id = $id
            ";
            mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);
}


?>