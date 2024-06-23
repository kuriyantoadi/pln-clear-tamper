<?php

include '../koneksi.php';

// Get POST data and sanitize inputs
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = sha1(mysqli_real_escape_string($koneksi, $_POST['password']));
$nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
$nama_petugas = mysqli_real_escape_string($koneksi, $_POST['nama_petugas']);
$jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
$wilker = mysqli_real_escape_string($koneksi, $_POST['wilker']);
$status = mysqli_real_escape_string($koneksi, $_POST['status']);

// Insert data into the database
$query = "INSERT INTO tb_user (username, password, nik, nama_petugas, jabatan, wilker, status) 
          VALUES ('$username', '$password', '$nik', '$nama_petugas', '$jabatan', '$wilker', '$status')";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: kelola_petugas.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
