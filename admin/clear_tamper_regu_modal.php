<!-- Modal Detail Awal -->
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
                        $d1 = mysqli_query($koneksi, "SELECT tb_clear_tamper_regu.*,
                                                        u1.nama_petugas AS nama_petugas1,
                                                        u2.nama_petugas AS nama_petugas2,
                                                        u3.nama_petugas AS nama_petugas3
                                                        FROM 
                                                        tb_clear_tamper_regu
                                                        JOIN tb_user u1 ON tb_clear_tamper_regu.id_user1 = u1.id_user
                                                        JOIN tb_user u2 ON tb_clear_tamper_regu.id_user2 = u2.id_user
                                                        JOIN tb_user u3 ON tb_clear_tamper_regu.id_user3 = u3.id_user
                                                        WHERE 
                                                        tb_clear_tamper_regu.id_clear_tamper_regu = '". $d['id_clear_tamper_regu']. "'
                                                        ORDER BY 
                                                        tb_clear_tamper_regu.tgl_permintaan ASC;");
                        while ($d_petugas = mysqli_fetch_array($d1)) {
                        ?>
                    <tr>
                        <th>Nama Petugas 1</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas1']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 2</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas2']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 3</th>
                        <td>: <?= htmlspecialchars($d_petugas['nama_petugas3']) ?></td>
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
                        <td>: <?= htmlspecialchars($d['clear_tamper']) ?></td>
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

<!-- Modal Kirim Tamper Awal-->
<div class="modal fade" id="kirim_tamper<?php echo $d['id_clear_tamper_regu']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Kirim Kode Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_regu_kirim.php" id="formInputClearTamper" method="post" enctype="multipart/form-data">
                <table class="table table-hover">
                    <tr>
                        <th>Nama Petugas 1</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 2</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 3</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
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
                    <!-- <tr>
                        <th>id_user</th>
                        <td>: <?= htmlspecialchars($d['id_user1']) ?></td>
                    </tr> -->
                    <tr>
                        <th>Clear Tamper</th>
                        <td>
                            <input type="text" name="clear_tamper" class="form-control" value="" id="inputClearTamper" required>
                            <input type="hidden" name="id_clear_tamper_regu" value="<?= $d['id_clear_tamper_regu'] ?>">
                        </td>
                    </tr>
                     
                </table>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Kirim" class="btn btn-sm btn-success">
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
                  </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Kirim Tamper Akhir -->


<!-- Modal Edit Awal-->
<div class="modal fade" id="edit<?php echo $d['id_clear_tamper_regu']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_regu_edit.php" id="formEditClearTamper" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table table-hover">
                    <tr>
                            <td>Nama Petugas 1</td>
                            <td>
                                <input type="text" class="form-control" name="id_user1"  value="<?= $d['nama_petugas'] ?>" readonly>
                                <input type="hidden" name="id_user1" class="form-control" value="<?= $d['id_user1'] ?>" require>
                                <input type="hidden" name="clear_tamper" class="form-control" value="<?= $d['clear_tamper'] ?>" require>
                            </td>
                        </tr>
                        <?php
                            $d2 = mysqli_query($koneksi, "SELECT 
                                                            tb_clear_tamper_regu.*,
                                                            u2.nama_petugas AS nama_petugas2,
                                                            u3.nama_petugas AS nama_petugas3
                                                            FROM 
                                                            tb_clear_tamper_regu
                                                            JOIN tb_user u2 ON tb_clear_tamper_regu.id_user2 = u2.id_user
                                                            JOIN tb_user u3 ON tb_clear_tamper_regu.id_user3 = u3.id_user
                                                            WHERE 
                                                            tb_clear_tamper_regu.id_clear_tamper_regu = '". $d['id_clear_tamper_regu']. "'
                                                            ORDER BY 
                                                            tb_clear_tamper_regu.tgl_permintaan ASC;");
                            while ($d_nama = mysqli_fetch_array($d2)) { ?>  
                        ?>
                        <tr>
                            <td>Nama Petugas 2</td>
                            <td>
                                <select name="id_user2" class="form-control" id="">
                                        <option value="<?php echo $d['id_user2']?>">Pilihan awal = <?= $d_nama['nama_petugas2'] ?></option>
                                    <?php $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_2 = mysqli_fetch_array($d1)) { ?>                                
                                        <option value="<?php echo $d_petugas_2['id_user']?>"><?php echo $d_petugas_2['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>  
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Nama Petugas 3</td>
                            <td>
                                <select name="id_user3" class="form-control" id="">
                                <option value="<?php echo $d['id_user']?>">Pilihan awal = <?= $d_nama['nama_petugas3'] ?></option>                                
                                    <?php
                                        $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_3 = mysqli_fetch_array($d1)) {
                                    ?>
                                        <option value="<?php echo $d_petugas_3['id_user']?>"><?php echo $d_petugas_3['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>  
                            </td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>bondg</td>
                            <td><input class="form-control" type="text" name="bondg" value="<?= htmlspecialchars($d['bondg'])?>" require></td>
                        </tr>
                        <tr>
                            <td>Tanggal Permintaan</td>
                            <td><input class="form-control" type="date" name="tgl_permintaan" value="<?= isset($d['tgl_permintaan']) ? $d['tgl_permintaan'] : date('Y-m-d') ?>" require></td>
                        </tr>
                        <tr>
                            <td>Nama Pelapor</td>
                            <td><input class="form-control" type="text" name="nama_pelapor" value="<?= htmlspecialchars($d['nama_pelapor'])?>" require></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class="form-control" type="text" name="alamat" value="<?= htmlspecialchars($d['alamat'])?>" require></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td><input class="form-control" type="text" name="no_hp" value="<?= htmlspecialchars($d['no_hp'])?>" require></td>
                        </tr>
                        <tr>
                            <td>No KWH</td>
                            <td><input class="form-control" type="text" name="no_kwh" id="inputNokwh" value="<?= htmlspecialchars($d['no_kwh'])?>" require></td>
                        </tr>
                        <tr>
                            <td>Indikasi</td>
                            <td>
                                <input class="form-control" type="text" name="indikasi" value="<?= htmlspecialchars($d['indikasi'])?>" require>
                                <input type="hidden" name="id_clear_tamper_regu" class="form-control" value="<?= $d['id_clear_tamper_regu'] ?>" require>
                            </td>
                        </tr>
                        <tr>
                            <td>Photo KWH</td>
                            <td><input class="form-control" type="file" name="photo_kwh" value="<?= htmlspecialchars($d['photo_kwh']) ?>" require></td>
                        </tr>                            
                        
                </table>


                    <!-- Tambahkan token CSRF di sini jika diperlukan -->
                    <input type="hidden" name="csrf_token" value="your_csrf_token_here">
            </div>
            <div class="modal-footer">
                <!-- Tombol Submit untuk menyimpan perubahan -->
                <!-- <input type="submit" class="btn btn-info btn" style="margin-bottom: 50px" name="upload" value="simpan"> -->
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                </form>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Akhir -->

