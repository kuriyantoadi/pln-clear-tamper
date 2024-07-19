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
                            Clear Tamper
                        </h1>
                        <div class="page-header-subtitle">Halaman Clear Tamper</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
    

<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Tabel Clear Tamper</div>
        <div class="card-body">

            <?php include('../alert.php'); ?>

            <!-- <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah"><i data-feather="plus"></i>Tambah Petugas</button> -->
            <table id="tabel_js" class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Permintaan</th>
                        <th>Nama Petugas</th>
                        <th>Nomor KWH</th>
                        <th>Status Permintaan</th>
                        <th>Opsi</th>
                       
                    </tr>
                </thead>
                
               <?php
               include '../koneksi.php';

                // Perform the join query
                $query = "
                SELECT tb_user.*, tb_clear_tamper_regu.*
                FROM tb_user
                JOIN tb_clear_tamper_regu ON tb_user.id_user = tb_clear_tamper_regu.id_user1
                ORDER BY tb_clear_tamper_regu.tgl_permintaan ASC;
                ";

                $data = mysqli_query($koneksi, $query);

                if (!$data) {
                    echo "Error: " . mysqli_error($koneksi);
                    exit;
                }
                
                // Set locale to Indonesian
                // setlocale(LC_TIME, 'id_ID.UTF-8');
                // Check if tgl_permintaan is set, otherwise use today's date
                // $date_value = isset($d['tgl_permintaan']) ? $d['tgl_permintaan'] : date('Y-m-d');


                $no=1;
                while ($d = mysqli_fetch_array($data)) {
                    
                    $date_value = isset($d['tgl_permintaan']) ? $d['tgl_permintaan'] : date('Y-m-d');


                ?>
                
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= date('d F Y', strtotime($date_value)) ?></td>
                        <td><?= $d['nama_petugas'] ?></td>
                        <td><?= $d['no_kwh'] ?></td>
                        <td>
                            <?php if($d['status_permintaan'] == 'terkirim'){ ?>
                                <div class="badge bg-success text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['status_permintaan'] == 'proses'){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Proses</div>
                            <?php }else {?>
                                <div class="badge bg-danger text-white rounded-pill">Error</div>
                                <?php } ?> 
                       </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="clear_tamper_regu_hapus.php?id_clear_tamper_regu=<?= $d['id_clear_tamper_regu']; ?>" onclick="return confirm('Anda yakin Hapus data pengajuan <?= $d['tgl_permintaan']; ?> dan Nomor KWH <?= $d['no_kwh']; ?> ?')"><i data-feather="trash-2"></i></a>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit<?= $d['id_clear_tamper_regu'] ?>" id="<?= $d['id_clear_tamper_regu'] ?>"><i data-feather="edit"></i></button>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detail<?= $d['id_clear_tamper_regu'] ?>" id="<?= $d['id_clear_tamper_regu'] ?>"><i data-feather="eye"></i></button>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#kirim_tamper<?= $d['id_clear_tamper_regu'] ?>" id="<?= $d['id_clear_tamper_regu'] ?>"><i data-feather="unlock"></i></button>
                            <!-- <?php include('clear_tamper_regu_modal.php') ?> -->
                        </td>
                    </tr>
                
                <?php } ?>
            </table>
        </div>
    </div>


    <script>
        // input clear tamper
        document.getElementById('formInputClearTamper').addEventListener('submit', function(event) {
            const inputClearTamper = document.getElementById('inputClearTamper');
            const inputValue = inputClearTamper.value;

            if (inputValue.length !== 20) {
                alert('Input Clear Tamper harus tepat 20 karakter.');
                event.preventDefault(); // Mencegah form dari pengiriman
            }
        });
    </script>

    <script>
        document.getElementById('formEditClearTamper').addEventListener('submit', function(event) {
            const inputBondg = document.getElementById('inputBondg');
            const inputBondgValue = inputBondg.value;

            const inputNokwh = document.getElementById('inputNokwh');
            const inputNokwhValue = inputNokwh.value;

            let valid = true;

            if (inputBondgValue.length < 8 || inputBondgValue.length > 12) {
                alert('Input Bondg harus antara 8 dan 12 karakter.');
                valid = false;
            }

            if (inputNokwhValue.length < 11 || inputNokwhValue.length > 12) {
                alert('Input No Kwh harus antara 11 dan 12 karakter.');
                valid = false;
            }

            if (!valid) {
                event.preventDefault(); // Mencegah form dari pengiriman jika ada error
            }
        });
    </script>



<?php include('../template/footer.php') ?>
