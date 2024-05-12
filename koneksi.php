<?php
$koneksi = mysqli_connect("localhost", "root", "", "pln_clear_tamper");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}