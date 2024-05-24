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
                        <th>Status Permintaan</th>
                        <th>Opsi</th>
                       
                    </tr>
                </thead>
                
               <?php
               include '../koneksi.php';

                // Perform the join query
                $query = "
                    SELECT 
                        ct.*, 
                        u.username, 
                        u.nama_petugas, 
                        u.jabatan, 
                        u.wilker, 
                        u.status 
                    FROM 
                        tb_clear_temper ct
                    JOIN 
                        tb_user u 
                    ON 
                        ct.id_user = u.id_user";

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
                        <td>

                            <?php if($d['status_permintaan'] == 'pengajuan'){ ?>
                                <div class="badge bg-danger text-white rounded-pill">Pengajuan</div>
                            <?php }elseif($d['status_permintaan'] == 'proses'){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Proses</div>
                            <?php }elseif($d['status_permintaan'] == 'terkirim'){ ?>
                                <div class="badge bg-info text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['status_permintaan'] == 'selesai'){ ?>
                                <div class="badge bg-success text-white rounded-pill">Selesai</div>
                            <?php } ?> 
                       </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="kelola_petugas_hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm('Anda yakin Hapus data user <?php echo $d['nama_petugas']; ?> ?')"><i data-feather="trash-2"></i></a>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?php echo $d['id_user'] ?>" id=".$d['id_user']."><i data-feather="edit"></i></button>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?php echo $d['id_user'] ?>" id=".$d['id_user']."><i data-feather="eye"></i></button>
                            <?php include('kelola_petugas_modal.php') ?>
                        </td>
                    </tr>
                
                <?php } ?>
            </table>
        </div>
    </div>



<?php include('../template/footer.php') ?>
