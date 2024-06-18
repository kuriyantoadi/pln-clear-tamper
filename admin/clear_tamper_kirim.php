<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_tamper = htmlspecialchars($_POST['id_clear_tamper']);
$clear_tamper = htmlspecialchars($_POST['clear_tamper']);

if($clear_tamper == NULL){ // jika kode tamper kosong
    $status_permintaan = 'proses';
}elseif(!empty($clear_tamper)){ // jika kode tamper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}


$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_tamper SET
        clear_tamper='$clear_tamper',
        status_permintaan='$status_permintaan' WHERE id_clear_tamper='$id_clear_tamper'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_tamper.php?pesan=update_clear_tamper_berhasil");
}else {
    header("location:clear_tamper.php?pesan=update_clear_tamper_berhasil");
}