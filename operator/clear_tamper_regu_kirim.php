<?php
session_start();
if ($_SESSION['status'] != "operator") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_clear_tamper_regu = htmlspecialchars($_POST['id_clear_tamper_regu']);
$clear_tamper = htmlspecialchars($_POST['clear_tamper']);

if($clear_tamper == NULL){ // jika kode tamper kosong
    $status_permintaan = 'proses';
}elseif(!empty($clear_tamper)){ // jika kode tamper tidak kosong
    $status_permintaan = 'terkirim';
}else{
    $status_permintaan = '';
}

// Cek apakah clear_tamper yang baru sudah ada di database
$query = mysqli_query($koneksi, "SELECT * FROM tb_clear_tamper_regu WHERE clear_tamper='$clear_tamper' AND id_clear_tamper_regu != '$id_clear_tamper_regu'");
$cek_duplikasi = mysqli_num_rows($query);

if ($cek_duplikasi > 0) {
    // Jika sudah ada, kembalikan pesan error
    header("location:clear_tamper_regu.php?pesan=clear_tamper_sudah_ada");
    exit();
}

// Lanjutkan update jika tidak ada duplikasi
$cek_edit = mysqli_query($koneksi, "UPDATE tb_clear_tamper_regu SET
        clear_tamper='$clear_tamper',
        status_permintaan='$status_permintaan' WHERE id_clear_tamper_regu='$id_clear_tamper_regu'
        ");

if ($cek_edit) {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_berhasil");
}else {
    header("location:clear_tamper_regu.php?pesan=update_clear_tamper_gagal");
}
?>
