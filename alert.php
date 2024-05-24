<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Username atau Password Salah
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "logout") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Anda Berhasil Logout
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "berhasil") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Update Data Berhasil
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "
            <div class='alert alert-primary alert-dismissible fade show' role='alert'>
                Anda Harus Login
                <button class='btn-close' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
    }
?>