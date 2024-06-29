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
                            <div class="page-header-icon"><i data-feather="zap"></i></div>
                            Clear Tamper Regu
                        </h1>
                        <div class="page-header-subtitle">Halaman Clear Tamper Regu</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    

<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Clear Tamper Regu</div>
        <div class="card-body">

            <?php include('../alert.php'); ?>

            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="plus"></i>Tambah Regu</button>            
            <?php include('clear_tamper_regu_modal.php') ?>
            <table id="tabel_js" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Regu</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                
               <?php
               include '../koneksi.php';

                // Perform the join query
                $query = " SELECT * FROM tb_user_regu ";
                $data = mysqli_query($koneksi, $query);
                if (!$data) {
                    echo "Error: " . mysqli_error($koneksi);
                    exit;
                }

                $no=1;
                while ($d = mysqli_fetch_array($data)) {
                

                ?>
                
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nama_regu'] ?></td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="clear_tamper_regu_hapus.php?id_regu=<?php echo $d['id_regu']; ?>" onclick="return confirm('Anda yakin Hapus data nama regu)'"><i data-feather="trash-2"></i></a>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_regu'] ?>" id=".$d['id_regu']."><i data-feather="edit"></i></button>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $d['id_regu'] ?>" id=".$d['id_regu']."><i data-feather="eye"></i></button>
                            <!-- <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kirim_tamper<?php echo $d['id_regu'] ?>" id=".$d['id_regu']."><i data-feather="unlock"></i></button> -->
                            <?php include('clear_tamper_regu_modal.php') ?>

                        </td>
                    </tr>
                
                <?php } ?>
            </table>
        </div>
    </div>



<?php include('../template/footer.php') ?>
