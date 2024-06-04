<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_temper = htmlspecialchars($_POST['id_clear_temper']);
$bondg = htmlspecialchars($_POST['kode_temper']);
$tgl_permintaan = htmlspecialchars($_POST['tgl_permintaan']);
$nama_pelapor = htmlspecialchars($_POST['nama_pelapor']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
$no_meter = htmlspecialchars($_POST['no_meter']);
$indikasi = htmlspecialchars($_POST['indikasi']);
$id_user = htmlspecialchars($_POST['id_user']);
$kode_temper = htmlspecialchars($_POST['kode_temper']);

$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_temper SET
        bondg='$bondg',
        tgl_permintaan='$tgl_permintaan',
        nama_pelapor='$nama_pelapor',
        alamat='$alamat',
        no_hp='$no_hp',
        id_pelanggan='$id_pelanggan',
        no_meter='$no_meter',
        indikasi='$indikasi',
        id_user='$id_user',
        kode_temper='$kode_temper'

        WHERE id_clear_temper='$id_clear_temper'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}else {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}