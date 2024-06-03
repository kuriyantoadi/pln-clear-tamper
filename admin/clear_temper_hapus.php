<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

// koneksi database
include '../koneksi.php';

$id_clear_temper = $_GET['id_clear_temper'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_clear_temper where id_clear_temper='$id_clear_temper' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    header("location:clear_temper.php?pesan=hapus_berhasil");
} 