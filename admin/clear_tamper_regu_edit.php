<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_regu = htmlspecialchars($_POST['id_regu']);
$nama_regu = htmlspecialchars($_POST['nama_regu']);

$cek_edit = mysqli_query($koneksi, "UPDATE tb_user_regu SET nama_regu='$nama_regu' WHERE id_regu='$id_regu'");

// var_dump(cek_edit);
if ($cek_edit) {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_regu_berhasil");
}else {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_regu_berhasil");
}