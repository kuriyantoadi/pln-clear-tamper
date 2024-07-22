<?php
session_start();
if ($_SESSION['status'] != "petugas") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_tamper_regu = htmlspecialchars($_POST['id_clear_tamper_regu']);
$bondg = htmlspecialchars($_POST['bondg']);
$tgl_permintaan = htmlspecialchars($_POST['tgl_permintaan']);
$nama_pelapor = htmlspecialchars($_POST['nama_pelapor']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$no_kwh = htmlspecialchars($_POST['no_kwh']);
$indikasi = htmlspecialchars($_POST['indikasi']);
$id_user1 = htmlspecialchars($_POST['id_user1']);
$id_user2 = htmlspecialchars($_POST['id_user2']);
$id_user3 = htmlspecialchars($_POST['id_user3']);
$status_permintaan = 'proses';


$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_clear_tamper_regu SET
        bondg='$bondg',
        tgl_permintaan='$tgl_permintaan',
        nama_pelapor='$nama_pelapor',
        alamat='$alamat',
        no_hp='$no_hp',
        no_kwh='$no_kwh',
        indikasi='$indikasi',
        id_user1='$id_user1',
        id_user2='$id_user2',
        id_user3='$id_user3',
        status_permintaan='$status_permintaan';
        ");

// Check if the query was successful
if ($cek_tambah) {
    header("Location: clear_tamper_regu.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}