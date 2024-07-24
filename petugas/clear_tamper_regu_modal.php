<!-- Modal Detail Awal-->
<div class="modal fade" id="detail<?php echo $d['id_clear_tamper_regu']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Detail Pengajuan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <?php
                        // include '../koneksi.php';
                        $d1 = mysqli_query($koneksi, "SELECT tb_clear_tamper_regu.*,
                tb_user.id_user, 
                tb_user.nama_petugas
                FROM tb_user
                JOIN tb_clear_tamper_regu
                ON tb_clear_tamper_regu.id_user = tb_user.id_user
                WHERE tb_user.jabatan = 'petugas' AND
                tb_user.id_user = ".$_SESSION['id_user']."
                ORDER BY tb_clear_tamper_regu.tgl_permintaan ASC");
                        while ($d_petugas = mysqli_fetch_array($d1)) {
                        ?>
                    <tr>
                        <th>Nama Petugas 1</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 2</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas_2']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 3</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas_3']) ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th>Bondg</th>
                        <td>: <?= htmlspecialchars($d['bondg']) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td>: <?= htmlspecialchars($d['tgl_permintaan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td>: <?= htmlspecialchars($d['nama_pelapor']) ?></td>
                    </tr>
                    <tr>
                        <th>Alamat Pelapor</th>
                        <td>: <?= htmlspecialchars($d['alamat']) ?></td>
                    </tr>
                    <tr>
                        <th>No Hp</th>
                        <td>: <?= htmlspecialchars($d['no_hp']) ?></td>
                    </tr>
                    <tr>
                        <th>Nomor KWH</th>
                        <td>: <?= htmlspecialchars($d['no_kwh']) ?></td>
                    </tr>
                    <tr>
                        <th>Indikasi</th>
                        <td>: <?= htmlspecialchars($d['indikasi']) ?></td>
                    </tr>
                    <tr>
                        <th>Photo KWH</th>
                        <td>: <img width="100px" src="../assets/photo_kwh/<?= htmlspecialchars($d['photo_kwh']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Clear Tamper</th>
                        <td>: <?= $d['clear_tamper'] ?></td>
                    </tr>
                     <tr>
                        <th>Status Permintaan</th>
                        <td>: 
                            <?php if($d['status_permintaan'] == 'terkirim'){ ?>
                                <div class="badge bg-success text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['status_permintaan'] == 'proses'){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Proses</div>
                            <?php }else { ?>
                                <div class="badge bg-danger text-white rounded-pill">Error</div>
                                <?php } ?>
                       </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Detail Akhir -->
