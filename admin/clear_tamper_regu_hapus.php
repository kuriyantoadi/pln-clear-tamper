<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_regu = $_GET['id_regu'];
// $photo_kwh = $_GET['photo_kwh'];


$data = mysqli_query($koneksi, "SELECT * FROM tb_user_regu where id_regu=$id_regu");

// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_user_regu where id_regu='$id_regu' ");


// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:clear_tamper_regu.php?pesan=hapus_berhasil");
} 