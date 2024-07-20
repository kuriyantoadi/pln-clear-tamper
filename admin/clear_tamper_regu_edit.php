<?php
session_start();
if ($_SESSION['status'] != "admin") {
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
$clear_tamper = htmlspecialchars($_POST['clear_tamper']);
$nama_petugas_2 = htmlspecialchars($_POST['nama_petugas_2']);
$nama_petugas_3 = htmlspecialchars($_POST['nama_petugas_3']);

if($clear_tamper == NULL){ // jika kode tamper kosong
    $status_permintaan = 'proses';
}elseif(!empty($clear_tamper)){ // jika kode tamper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}

$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_tamper_regu SET
        bondg='$bondg',
        tgl_permintaan='$tgl_permintaan',
        nama_pelapor='$nama_pelapor',
        alamat='$alamat',
        no_hp='$no_hp',
        no_kwh='$no_kwh',
        indikasi='$indikasi',
        clear_tamper='$clear_tamper',
        nama_petugas_2='$nama_petugas_2',
        nama_petugas_3='$nama_petugas_3',
        status_permintaan='$status_permintaan'
        WHERE id_clear_tamper_regu='$id_clear_tamper_regu'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_regu_berhasil");
}else {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_regu_berhasil");
}