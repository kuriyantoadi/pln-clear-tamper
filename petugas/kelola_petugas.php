<?php include('../template/header-petugas.php') ?>
<?php include('../template/header-petugas-menu.php') ?>


<!-- batas konten atas -->
<div id="layoutSidenav_content">
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Kelola Petugas
                        </h1>
                        <div class="page-header-subtitle">Halaman Kelola Petugas</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
    


<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Tabel Kelola Petugas</div>
        <div class="card-body">

            <?php include('../alert.php'); ?>

            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="plus"></i>Tambah Petugas</button>
            <table id="tabel_js" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Jabatan</th>
                        <th>Opsi</th>
                       
                    </tr>
                </thead>
                
               <?php
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from tb_clear_temper");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nama_petugas'] ?></td>
                        <td><?= $d['jabatan'] ?></td>
                        <td>
                            <!-- <a class="btn btn-danger btn-sm" href="kelola_petugas_hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['nama_petugas']; ?> ?')"><i data-feather="trash-2"></i></a> -->
                            <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user'] ?>" id=".$d['id_user']."><i data-feather="edit"></i></button> -->
                            <!-- <button class="btn btn-warning btn-sm"  data-bs-toggle="modal" data-bs-target="#password<?php echo $d['id_user'] ?>" id=".$d['id_user']."><i data-feather="key"></i></button> -->
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $d['id_user'] ?>" id=".$d['id_user']."><i data-feather="eye"></i></button>
                            <?php include('kelola_petugas_modal.php') ?>
                        </td>
                    </tr>
                
                <?php } ?>
            </table>
        </div>
    </div>






<?php include('../template/footer.php') ?>
