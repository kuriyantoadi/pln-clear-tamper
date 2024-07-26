<?php
session_start();
if ($_SESSION['status'] != "operator") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$nik = $_POST['nik'];
$nama_petugas = $_POST['nama_petugas'];
$jabatan = $_POST['jabatan'];
$id_regu = $_POST['id_regu'];



$cek_edit = mysqli_query($koneksi, "UPDATE tb_user SET
        username='$username',
        nik='$nik',
        nama_petugas='$nama_petugas',
        jabatan='$jabatan',
        id_regu = '$id_regu'
        where id_user='$id_user'
        ");


if ($cek_edit) {
    header("location:kelola_petugas.php?pesan=edit-berhasil");
} else {
    header("location:kelola_petugas.php?pesan=edit-gagal");
}