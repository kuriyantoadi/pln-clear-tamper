<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_temper = htmlspecialchars($_POST['id_clear_temper']);
$clear_temper = htmlspecialchars($_POST['clear_temper']);

if($clear_temper == NULL){ // jika kode tamper kosong
    $status_permintaan = 'proses';
}elseif(!empty($clear_temper)){ // jika kode tamper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}


$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_temper SET
        clear_temper='$clear_temper',
        status_permintaan='$status_permintaan' WHERE id_clear_temper='$id_clear_temper'
        ");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}else {
    header("location:clear_temper.php?pesan=update_clear_temper_berhasil");
}