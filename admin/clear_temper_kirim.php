<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_temper = htmlspecialchars($_POST['id_clear_temper']);
$kode_temper = htmlspecialchars($_POST['kode_temper']);

if($kode_temper == NULL){ // jika kode temper kosong
    $status_permintaan = 'proses';
}elseif(!empty($kode_temper)){ // jika kode temper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}


$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_temper SET
        kode_temper='$kode_temper',
        status_permintaan='$status_permintaan' WHERE id_clear_temper='$id_clear_temper'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}else {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}