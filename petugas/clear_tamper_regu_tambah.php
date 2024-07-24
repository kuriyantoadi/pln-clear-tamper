<?php

session_start();
if ($_SESSION['status'] != "petugas") {
    header("location:login.php?pesan=belum_login");
    exit();
}

include '../koneksi.php';

// Get POST data and sanitize inputs
$id_clear_tamper_regu = htmlspecialchars($_POST['id_clear_tamper_regu']);
$bondg = mysqli_real_escape_string($koneksi, $_POST['bondg']);
$tgl_permintaan = mysqli_real_escape_string($koneksi, $_POST['tgl_permintaan']);
$nama_pelapor = mysqli_real_escape_string($koneksi, $_POST['nama_pelapor']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$no_kwh = mysqli_real_escape_string($koneksi, $_POST['no_kwh']);
$indikasi = mysqli_real_escape_string($koneksi, $_POST['indikasi']);
$id_user = mysqli_real_escape_string($koneksi, $_POST['id_user']);
// $id_user2 = mysqli_real_escape_string($koneksi, $_POST['id_user2']);
// $id_user3 = mysqli_real_escape_string($koneksi, $_POST['id_user3']);
// $id_user = $_POST['id_user'];
$nama_petugas_2 = htmlspecialchars($_POST['nama_petugas_2']);
$nama_petugas_3 = htmlspecialchars($_POST['nama_petugas_3']);

// var_dump($id_user);
// exit();

// Upload Photo_kwh 
$photo_kwh = upload();
if (!$photo_kwh) {
    exit();
}

// Insert data into the database
$status_permintaan = 'proses';

$query = "INSERT INTO tb_clear_tamper_regu (
    id_clear_tamper_regu,
    bondg,
    tgl_permintaan,
    nama_pelapor,
    alamat,
    no_hp,
    no_kwh,
    indikasi,
    id_user,
    nama_petugas_2,
    nama_petugas_3,
    photo_kwh,
    status_permintaan
) VALUES (
    '$id_clear_tamper_regu',
    '$bondg',
    '$tgl_permintaan',
    '$nama_pelapor',
    '$alamat',
    '$no_hp',
    '$no_kwh',
    '$indikasi',
    '$id_user',
    '$nama_petugas_2',
    '$nama_petugas_3',
    '$photo_kwh',
    '$status_permintaan'
)";

$cek_tambah = mysqli_query($koneksi, $query);

// Check if the query was successful
if ($cek_tambah) {
    header("Location: clear_tamper_regu.php?pesan=tambah_berhasil");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

function upload() {
    $namaFile = $_FILES['photo_kwh']['name'];
    $ukuranFile = $_FILES['photo_kwh']['size'];
    $error = $_FILES['photo_kwh']['error'];
    $tmpName = $_FILES['photo_kwh']['tmp_name'];

    // Check if a file was uploaded
    if ($error === 4) {
        echo "<script>
                alert('Tidak ada file yang diupload');
                window.location.href = 'clear_tamper_regu.php?pesan=tambah_gagal';
              </script>";
        return false;
    }

    // Validate file extension
    $extentionGambarValid = ['jpg', 'jpeg', 'png'];
    $extentionGambar = explode('.', $namaFile);
    $extentionGambar = strtolower(end($extentionGambar));
    if (!in_array($extentionGambar, $extentionGambarValid)) {
        echo "<script>
                alert('Ini bukan gambar woi!');
                window.location.href = 'clear_tamper_regu.php?pesan=tambah_gagal';
              </script>";
        return false;
    }

    // Validate file size
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('Mohon maaf ukuran gambar terlalu besar');
              </script>";
        return false;
    }

    // Generate a new file name based on the current time
    $namaFileBaru = 'photo_kwh' . '_' . date('Ymd_His') . '.' . $extentionGambar;

    // Move the uploaded file to the desired directory
    if (move_uploaded_file($tmpName, '../assets/photo_kwh/' . $namaFileBaru)) {
        echo "<script>
                alert('Berhasil terunggah');
              </script>";
        return $namaFileBaru;
    } else {
        echo "<script>
                alert('Gagal mengunggah gambar');
              </script>";
        return false;
    }
}

?>
