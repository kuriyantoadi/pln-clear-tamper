<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>


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
    <!-- Main page content-->
    <!-- <div class="container-xl px-4 mt-n10">

        <div class="row">
            <div class="col-xxl-4 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <h1 class="text-primary">PLN Clear Tamper ULP Pandeglang</h1>
                                    <p class="text-gray-700 mb-0">
                                        PLN Clear Tamper ULP Pandeglang adalah sistem keamanan untuk mendeteksi dan menghapus jejak manipulasi pada infrastruktur listrik PLN di Pandeglang, menjaga keandalan pasokan listrik dan kinerja operasional.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="../assets/assets/img/illustrations/at-work.svg" style="max-width: 26rem" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->


<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Tabel Kelola Petugas</div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama Petugas</th>
                        <th>Jabatan</th>
                        <th>Wilker</th>
                        <th>Opsi</th>
                       
                    </tr>
                </thead>
               <?php
                include '../koneksi.php';
                include('../alert.php');
                // $tingkat = $_GET['tingkat'];
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from tb_user ORDER BY username ASC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['username'] ?></td>
                        <td><?= $d['nama_petugas'] ?></td>
                        <td><?= $d['jabatan'] ?></td>
                        <td><?= $d['wilker'] ?></td>
                        <td>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#edit"><i data-feather="edit"></i></button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="key"></i></button>
                            <button class="btn btn-datatable btn-icon btn-transparent-dark" data-bs-toggle="modal" data-bs-target="#detail"><i data-feather="eye"></i></button>
                            <?php include('kelola_petugas_modal.php') ?>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>






<?php include('../template/footer.php') ?>
