<?php

session_start();
if ($_SESSION['status'] != "operator") {
    header("location:login.php?pesan=belum_login");
}

$id_user = $_SESSION['id_user'];

include '../koneksi.php';

// Get POST data and sanitize inputs
$nama_regu = mysqli_real_escape_string($koneksi, $_POST['nama_regu']);

// Insert data into the database
$query = "INSERT INTO tb_user_regu (nama_regu) VALUES ('$nama_regu')";
$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: clear_tamper_regu.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}