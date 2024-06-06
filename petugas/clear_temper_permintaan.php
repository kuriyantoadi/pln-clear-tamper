<?php

session_start();
if ($_SESSION['status'] != "petugas") {
    header("location:login.php?pesan=belum_login");
}

$id_user = $_SESSION['id_user'];

include '../koneksi.php';

// Get POST data and sanitize inputs
$bondg = mysqli_real_escape_string($koneksi, $_POST['bondg']);
$tgl_permintaan = mysqli_real_escape_string($koneksi, $_POST['tgl_permintaan']);
$nama_pelapor = mysqli_real_escape_string($koneksi, $_POST['nama_pelapor']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$id_pelanggan = mysqli_real_escape_string($koneksi, $_POST['id_pelanggan']);
$no_meter = mysqli_real_escape_string($koneksi, $_POST['no_meter']);
$indikasi = mysqli_real_escape_string($koneksi, $_POST['indikasi']);
$photo_kwh = mysqli_real_escape_string($koneksi, $_POST['photo_kwh']);
$id_user = mysqli_real_escape_string($koneksi, $_POST['id_user']);
$kode_temper = '';
$status_permintaan = 'proses';

// Insert data into the database
$query = "INSERT INTO tb_clear_temper VALUES (
                        '',
                        '$bondg', 
                        '$tgl_permintaan', 
                        '$nama_pelapor', 
                        '$alamat', 
                        '$no_hp',
                        '$id_pelanggan',
                        '$no_meter', 
                        '$indikasi', 
                        '$photo_kwh', 
                        '$id_user', 
                        '$kode_temper', 
                        '$status_permintaan')";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: clear_temper.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
