<?php
session_start();
if ($_SESSION['status'] != "operator") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_clear_tamper = $_GET['id_clear_tamper'];
// $photo_kwh = $_GET['photo_kwh'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_clear_tamper where id_clear_tamper=$id_clear_tamper");
while ($d = mysqli_fetch_array($data)) {
    // var_dump($d['photo_kwh']);
    $photo_kwh = $d['photo_kwh'];
}

// hapus file
unlink('../assets/photo_kwh/'.$photo_kwh);

// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_clear_tamper where id_clear_tamper='$id_clear_tamper' ");


// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:clear_tamper.php?pesan=hapus_berhasil");
} 