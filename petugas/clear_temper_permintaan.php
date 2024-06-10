<?php

session_start();
if ($_SESSION['status'] != "petugas") {
    header("location:login.php?pesan=belum_login");
}

$id_user = $_SESSION['id_user'];

include '../koneksi.php';

// Get POST data and sanitize inputs
$bondg = mysqli_real_escape_string($koneksi, $_POST['bondg']);
$tgl_permintaan = mysqli_real_escape_string($koneksi, $_POST['tgl_permintaan']);
$nama_pelapor = mysqli_real_escape_string($koneksi, $_POST['nama_pelapor']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$id_pelanggan = mysqli_real_escape_string($koneksi, $_POST['id_pelanggan']);
$no_kwh = mysqli_real_escape_string($koneksi, $_POST['no_kwh']);
$indikasi = mysqli_real_escape_string($koneksi, $_POST['indikasi']);

// Upload Photo_kwh
$photo_kwh = upload();
if(!$photo_kwh) {
    return false;
}

$id_user = mysqli_real_escape_string($koneksi, $_POST['id_user']);
$kode_temper = '';
$status_permintaan = 'proses';

// Insert data into the database
$query = "INSERT INTO tb_clear_temper VALUES (
                        '',
                        '$bondg', 
                        '$tgl_permintaan', 
                        '$nama_pelapor', 
                        '$alamat', 
                        '$no_hp',
                        '$id_pelanggan',
                        '$no_kwh', 
                        '$indikasi', 
                        '$photo_kwh', 
                        '$id_user', 
                        '$kode_temper', 
                        '$status_permintaan')";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: clear_temper.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

function upload() {
    $namaFile = $_FILES['photo_kwh']['name'];
    $ukuranFile = $_FILES['photo_kwh']['size'];
    $error = $_FILES['photo_kwh']['error'];
    $tmpName = $_FILES['photo_kwh']['tmp_name'];

    // cek apakah yang diupload adalah gambar
    $extentionGambarValid = ['jpg', 'jpeg', 'png'];
    $extentionGambar = explode('.', $namaFile);
    $extentionGambar = strtolower(end($extentionGambar));
    if (!in_array($extentionGambar, $extentionGambarValid)) {
        echo "<script>
                    alert('Ini bukan gambar woi!');
                    window.location.href = 'clear_temper.php?pesan=tambah_gagal';
              </script>";
        
        return false;
    } else {
        echo "<script>
                    alert('Berhasil terunggah');
              </script>";
    }
    // cek jika ukuranya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                    alert('Ukuran gambarnya kegedean woi!');
              </script>";
        return false;
    }

    // lolos pengecekan, gambar siap Upload
    // generate nama gambar baru
    // Tentukan nama file baru berdasarkan waktu upload
    $namaFileBaru = 'photo_kwh'.'_'.date('Ymd_His').'.'.$extentionGambar;

    move_uploaded_file($tmpName, '../assets/photo_kwh/' . $namaFileBaru);
    return $namaFileBaru;
}
?>
