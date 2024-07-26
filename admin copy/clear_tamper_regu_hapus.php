<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_clear_tamper_regu = $_GET['id_clear_tamper_regu'];
// $photo_kwh = $_GET['photo_kwh'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_clear_tamper_regu where id_clear_tamper_regu=$id_clear_tamper_regu");
while ($d = mysqli_fetch_array($data)) {
    // var_dump($d['photo_kwh']);
    $photo_kwh = $d['photo_kwh'];
}

// hapus file
unlink('../assets/photo_kwh/'.$photo_kwh);

// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_clear_tamper_regu where id_clear_tamper_regu='$id_clear_tamper_regu' ");


// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:clear_tamper_regu.php?pesan=hapus_berhasil");
} 