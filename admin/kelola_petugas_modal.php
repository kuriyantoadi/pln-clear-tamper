<!-- Modal Detail Awal-->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <th>Wilayah Kerja</th>
                        <td>: <?= htmlspecialchars($d['wilker']) ?></td>
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
<!-- Modal Edit Awal-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="kelola_petugas_edit.php" method="post">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <input type="hidden" name="id_user" value="<?= htmlspecialchars($d['id_user']) ?>">
                    <table class="table">
                        <tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" name="username" value="<?= htmlspecialchars($d['username']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input class="form-control" type="text" name="nik" value="<?= htmlspecialchars($d['nik']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>Nama Petugas</td>
                            <td><input class="form-control" type="text" name="nama_petugas" value="<?= htmlspecialchars($d['nama_petugas']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td><input class="form-control" type="text" name="jabatan" value="<?= htmlspecialchars($d['jabatan']) ?>" required></td>
                        </tr>
                        <tr>
                            <td>Wilayah Kerja</td>
                            <td><input class="form-control" type="text" name="wilker" value="<?= htmlspecialchars($d['wilker']) ?>" required></td>
                        </tr>
                    </table>
                    <!-- Tambahkan token CSRF di sini jika diperlukan -->
                    <!-- <input type="hidden" name="csrf_token" value="your_csrf_token_here"> -->
            </div>
            <div class="modal-footer">
                <!-- Tombol Submit untuk menyimpan perubahan -->
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                </form>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Edit Akhir -->
