<?php
$conn = mysqli_connect("localhost", "root", "", "tugas_besar") or die("koneksi ke DB GAGAL!!!");

function query($query) {
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>