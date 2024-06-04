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
                            Clear Temper
                        </h1>
                        <div class="page-header-subtitle">Halaman Clear Temper</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
    

<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Tabel Clear Temper</div>
        <div class="card-body">

            <?php include('../alert.php'); ?>

            <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="plus"></i>Tambah Petugas</button> -->
            <table id="tabel_js" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Permintaan</th>
                        <th>Nama Petugas</th>
                        <th>Nomor Meter</th>
                        <th>Status Permintaan</th>
                        <th>Opsi</th>
                       
                    </tr>
                </thead>
                
               <?php
               include '../koneksi.php';

                // Perform the join query
                $query = "
                SELECT * 
                FROM tb_clear_temper
                JOIN tb_user 
                ON tb_clear_temper.id_user = tb_user.id_user;
                ";

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
                        <td><?= $d['tgl_permintaan'] ?></td>
                        <td><?= $d['nama_petugas'] ?></td>
                        <td><?= $d['no_meter'] ?></td>
                        <td>
                            <?php if($d['kode_temper']){ ?>
                                <div class="badge bg-success text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['kode_temper'] == NULL){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Pengajuan</div>
                            <?php } ?> 
                       </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="clear_temper_hapus.php?id_clear_temper=<?php echo $d['id_clear_temper']; ?>" onclick="return confirm('Anda yakin Hapus data pengajuan <?php echo $d['tgl_permintaan']; ?> dan nomor meter <?php echo $d['no_meter']; ?> ?')"><i data-feather="trash-2"></i></a>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_clear_temper'] ?>" id=".$d['id_clear_temper']."><i data-feather="edit"></i></button>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $d['id_clear_temper'] ?>" id=".$d['id_clear_temper']."><i data-feather="eye"></i></button>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kirim_temper<?php echo $d['id_clear_temper'] ?>" id=".$d['id_clear_temper']."><i data-feather="unlock"></i></button>
                            <?php include('clear_temper_modal.php') ?>
                        </td>
                    </tr>
                
                <?php } ?>
            </table>
        </div>
    </div>



<?php include('../template/footer.php') ?>
