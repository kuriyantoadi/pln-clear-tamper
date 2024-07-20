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
                    <tr>
                        <th>Nama Petugas 1</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 2</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas_2']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas 3</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas_3']) ?></td>
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
                                <input type="text" class="form-control" name=""  value="<?= $d['nama_petugas'] ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Petugas 2</td>
                            <td>
                                <select name="nama_petugas_2" class="form-control" id="">
                                <option value="<?php echo $d['nama_petugas']?>">Pilihan awal = <?= $d['nama_petugas_2'] ?></option>                                
                                    <?php
                                        $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_2 = mysqli_fetch_array($d1)) {
                                    ?>
                                        <option value="<?php echo $d_petugas_2['nama_petugas']?>"><?php echo $d_petugas_2['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>  
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Nama Petugas 3</td>
                            <td>
                                <select name="nama_petugas_3" class="form-control" id="">
                                <option value="<?php echo $d['nama_petugas_3']?>">Pilihan awal = <?= $d['nama_petugas_3'] ?></option>                                
                                    <?php
                                        $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_3 = mysqli_fetch_array($d1)) {
                                    ?>
                                        <option value="<?php echo $d_petugas_3['nama_petugas']?>"><?php echo $d_petugas_3['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>  
                            </td>
                        </tr>
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

