<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_clear_temper = $_GET['id_clear_temper'];
// $photo_kwh = $_GET['photo_kwh'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_clear_temper where id_clear_temper=$id_clear_temper");
while ($d = mysqli_fetch_array($data)) {
    // var_dump($d['photo_kwh']);
    $photo_kwh = $d['photo_kwh'];
}

// hapus file
unlink('../assets/photo_kwh/'.$photo_kwh);

// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_clear_temper where id_clear_temper='$id_clear_temper' ");


// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:clear_temper.php?pesan=hapus_berhasil");
} 