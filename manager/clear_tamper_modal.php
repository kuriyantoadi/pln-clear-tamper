<!-- Modal Detail Awal-->
<div class="modal fade" id="detail<?php echo $d['id_clear_tamper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Detail Pengajuan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <tr>
                        <th>Bondg</th>
                        <td>: <?= htmlspecialchars($d['bondg']) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td>: <?= date('d F Y', strtotime($d['tgl_permintaan'])) ?></td>
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
                    <tr>
                        <th>Nomor KWH</th>
                        <td>: <?= htmlspecialchars($d['no_kwh']) ?></td>
                    </tr>
                    <tr>
                        <th>Indikasi</th>
                        <td>: <?= htmlspecialchars($d['indikasi']) ?></td>
                    </tr>
                    <tr>
                        <th>photo_kwh</th>
                        <td>: <img width="100px" src="../assets/photo_kwh/<?= htmlspecialchars($d['photo_kwh']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Clear Tamper</th>
                        <td>: <?= htmlspecialchars($d['clear_tamper']) ?></td>
                    </tr>
                     <tr>
                        <th>Status Permintaan</th>
                        <td>: 
                            <?php if($d['clear_tamper']){ ?>
                                <div class="badge bg-success text-white rounded-pill">Terkirim</div>
                            <?php }elseif($d['clear_tamper'] == NULL){ ?>
                                <div class="badge bg-warning text-white rounded-pill">Pengajuan</div>
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
<div class="modal fade" id="kirim_tamper<?php echo $d['id_clear_tamper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalXl" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalXl">Kirim Kode Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_kirim.php" method="post" enctype="multipart/form-data">
                <table class="table table-hover">
                    <tr>
                        <th>Bondg</th>
                        <td>: <?= htmlspecialchars($d['bondg']) ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td>: <?= date('d F Y', strtotime($d['tgl_permintaan'])) ?></td>
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
                        <th>photo_kwh</th>
                        <td>: <img width="100px" src="../assets/photo_kwh/<?= htmlspecialchars($d['photo_kwh']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Clear Tamper</th>
                        <td>
                            <input type="text" name="clear_tamper" class="form-control" value="<?= $d['clear_tamper'] ?>" require>
                            <input type="hidden" name="id_clear_tamper" value="<?= $d['id_clear_tamper'] ?>">
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
<div class="modal fade" id="edit<?php echo $d['id_clear_tamper']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_edit.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table table-hover">
                    <tr>
                        <th>Bondg</th>
                        <td>
                            <input type="hidden" name="id_clear_tamper" value="<?= $d['id_clear_tamper'] ?>">
                            <input type="text" name="bondg" class="form-control" value="<?= htmlspecialchars($d['bondg']) ?>">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Permintaan</th>
                        <td><input type="date" name="tgl_permintaan" class="form-control" value="<?= isset($d['tgl_permintaan']) ? $d['tgl_permintaan'] : date('Y-m-d') ?>"></td>
                    </tr>
                    <tr>
                        <th>Nama Pelapor</th>
                        <td><input type="text" name="nama_pelapor" class="form-control" value="<?= htmlspecialchars($d['nama_pelapor']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Alamat Pelapor</th>
                        <td><input type="text" name="alamat" class="form-control" value="<?= htmlspecialchars($d['alamat']) ?>"></td>
                    </tr>
                    <tr>
                        <th>No Hp</th>
                        <td><input type="text" name="no_hp" class="form-control" value="<?= htmlspecialchars($d['no_hp']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Nomor KWH</th>
                        <td><input type="text" name="no_kwh" class="form-control" value="<?= htmlspecialchars($d['no_kwh']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Indikasi</th>
                        <td><input type="text" name="indikasi" class="form-control" value="<?= htmlspecialchars($d['indikasi']) ?>"></td>
                    </tr>
                    <tr>
                        <th>id_user</th>
                        <td><input type="text" name="id_user" class="form-control" value="<?= htmlspecialchars($d['id_user']) ?>"></td>
                    </tr>
                    <tr>
                        <th>Clear Tamper</th>
                        <td>
                            <input type="text" name="clear_tamper" class="form-control" value="<?= htmlspecialchars($d['clear_tamper']) ?>">
                            <input type="hidden" name="id_clear_tamper" value="<?= $d['id_clear_tamper'] ?>">
                        </td>
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


<!-- Modal Tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Unduh Database</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_tambah.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input class="form-control" type="text" name="password" value="" required></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input class="form-control" type="text" name="nik" value="" required></td>
                        </tr>
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input class="form-control" type="text" name="jabatan" value="" required></td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td><input class="form-control" type="text" name="wilker" value="" required></td>
                        </tr>
                         <tr>
                            <td>Status</td>
                            <td>
                                <select name="status" class="form-control" id="">
                                    <option value="">Pilihan</option>
                                    <option value="admin">admin</option>
                                    <option value="petugas">petugas</option>
                                </select>
                            </td>
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
<!-- Modal Tambah Akhir -->

<!-- Modal Password Awal-->
<div class="modal fade" id="password<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reset Password Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_password.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <input type="hidden" name="id_user" value="<?= $d['id_user'] ?>">
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="<?= htmlspecialchars($d['username']) ?>" required readonly></td>
                        </tr>
                      
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="<?= htmlspecialchars($d['nama_petugas']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input class="form-control" type="text" name="jabatan" value="<?= htmlspecialchars($d['jabatan']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td><input class="form-control" type="text" name="wilker" value="<?= htmlspecialchars($d['wilker']) ?>" required readonly></td>
                        </tr>
                        <tr>
                            <td>Password Baru</td>
                            <td><input class="form-control" type="text" name="wilker" value="" required></td>
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
<!-- Modal Password Akhir -->