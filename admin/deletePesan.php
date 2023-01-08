<?php 

$conn = mysqli_connect("localhost:3307", "root", "", "db_perpus");

$id = $_GET["id"];

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_pesan WHERE id = $id");
    return mysqli_affected_rows($conn);
}


if( hapus($id) > 0 ) {
	echo "
		<script>
			alert('pesan berhasil dihapus!');
			document.location.href = 'pesan.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('pesan gagal ditambahkan!');
			document.location.href = 'pesan.php';
		</script>
	";
}

?>