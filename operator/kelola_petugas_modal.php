<!-- Modal Detail Awal-->
<div class="modal fade" id="detail<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th>Username</th>
                        <td>: <?= htmlspecialchars($d['username']) ?></td>
                    </tr>
                    <tr>
                        <th>NIK</th>
                        <td>: <?= htmlspecialchars($d['nik']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Petugas</th>
                        <td>: <?= htmlspecialchars($d['nama_petugas']) ?></td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>: <?= htmlspecialchars($d['jabatan']) ?></td>
                    </tr>
                    <tr>
                        <th>Nama Regu</th> 
                        <td><?= htmlspecialchars($d['nama_regu']) ?></td>
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


<!-- Modal Edit Awal-->
<div class="modal fade" id="edit<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_edit.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <input type="hidden" name="id_user" value="<?= $d['id_user'] ?>">
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="<?= htmlspecialchars($d['username']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>
                                <input class="form-control"  type="text" name="nik" value="<?= htmlspecialchars($d['nik']) ?>" required minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus terdiri dari 16 digit angka" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);" >
                            </td>
                        </tr>

                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="<?= htmlspecialchars($d['nama_petugas']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>
                                <select name="jabatan" class="form-control">
                                    <option value="<?= htmlspecialchars($d['jabatan']) ?>">Pilihan Awal (<?= htmlspecialchars($d['jabatan']) ?>)</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Yandal">Yandal</option>
                                    <option value="K3">K3</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Regu</td>
                            <td>
                                <select name="id_regu" id="" class="form-control" required>
                                    <?php     
                                    $data_regu = mysqli_query($koneksi, "SELECT * from tb_user_regu WHERE id_regu='{$d['id_regu']}'");
                                    while ($d_regu = mysqli_fetch_array($data_regu)) { 
                                        ?>
                                    <option value="<?= $d_regu['id_regu'] ?>">Plihan Awal = <?= $d_regu['nama_regu']?></option>
                                    <?php
                                    $data_regu = mysqli_query($koneksi, "SELECT * from tb_user_regu");
                                    while ($d_regu = mysqli_fetch_array($data_regu)) {
                                    ?>
                                    <option value="<?= $d_regu['id_regu'] ?>"><?= $d_regu['nama_regu'] ?></option>
                                    <?php } ?>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td>
                                <select name="wilker" class="form-control" required>
                                    <option value="<?= $d['wilker'] ?>">Pilihan Awal ( <?= $d['wilker'] ?> )</option>
                                    <option value="Saketi">Saketi</option>
                                    <option value="Picung">Picung</option>
                                    <option value="Mandalawangi">Mandalawangi</option>
                                    <option value="Pandeglang">Pandeglang</option>
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
<!-- Modal Edit Akhir -->


<!-- Modal Tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
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
                            <td>
                                <input class="form-control"  type="text" name="nik" value="" required minlength="16" maxlength="16" pattern="\d{16}" title="NIK harus terdiri dari 16 digit angka" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 16);" >
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>
                                <select name="jabatan" class="form-control" required>
                                    <option value="">Pilihan</option>
                                    <option value="Operator">Operator</option>
                                    <option value="Yandal">Yandal</option>
                                    <option value="K3">K3</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td>
                                <select name="wilker" class="form-control" required>
                                    <option value="">Pilihan</option>
                                    <option value="Saketi">Saketi</option>
                                    <option value="Picung">Picung</option>
                                    <option value="Mandalawangi">Mandalawangi</option>
                                    <option value="Pandeglang">Pandeglang</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Regu</td>
                            <td>
                                <select name="id_regu" id="" class="form-control" required>
                                    <option value="">Pilihan</option>
                                    <?php
                                    $data_regu = mysqli_query($koneksi, "SELECT * from tb_user_regu");
                                    while ($d_regu = mysqli_fetch_array($data_regu)) {
                                    ?>
                                    <option value="<?= $d_regu['id_regu'] ?>"><?= $d_regu['nama_regu'] ?></option>

                                    <?php } ?>
                                </select>
                            </td>
                        </tr>

                         <tr>
                            <td>Status</td>
                            <td>
                                <select name="status" class="form-control" id="">
                                    <option value="">Pilihan</option>
                                    <option value="operator">operator</option>
                                    <option value="petugas">petugas</option>
                                    <option value="manager">manager</option>
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
                            <td>Nama Regu</td>
                            <?php 
                                $data_regu = mysqli_query($koneksi, "SELECT * from tb_user_regu WHERE id_regu='$d[id_regu]'");
                                while ($d_regu = mysqli_fetch_array($data_regu)) { ?>
                            <td><input class="form-control" type="text" name="id_regu" value="<?= htmlspecialchars($d_regu['nama_regu']) ?>" required readonly></td>
                            <?php } ?>
                        </tr>
                        <tr>
                            <td>Password Baru</td>
                            <td><input class="form-control" type="text" name="password" value="" required></td>
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