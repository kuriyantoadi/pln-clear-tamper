<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_temper = htmlspecialchars($_POST['id_clear_temper']);
$bondg = htmlspecialchars($_POST['bondg']);
$tgl_permintaan = htmlspecialchars($_POST['tgl_permintaan']);
$nama_pelapor = htmlspecialchars($_POST['nama_pelapor']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_hp = htmlspecialchars($_POST['no_hp']);
$no_kwh = htmlspecialchars($_POST['no_kwh']);
$indikasi = htmlspecialchars($_POST['indikasi']);
$clear_temper = htmlspecialchars($_POST['clear_temper']);
$id_user = htmlspecialchars($_POST['id_user']);

if($clear_temper == NULL){ // jika kode tamper kosong
    $status_permintaan = 'proses';
}elseif(!empty($clear_temper)){ // jika kode tamper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}

$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_temper SET
        bondg='$bondg',
        tgl_permintaan='$tgl_permintaan',
        nama_pelapor='$nama_pelapor',
        alamat='$alamat',
        no_hp='$no_hp',
        no_kwh='$no_kwh',
        indikasi='$indikasi',
        clear_temper='$clear_temper',
        id_user='$id_user',
        status_permintaan='$status_permintaan'
        WHERE id_clear_temper='$id_clear_temper'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}else {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}