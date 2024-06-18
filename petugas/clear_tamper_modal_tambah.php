
<!-- Modal Tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Permintaan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_permintaan.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table">
                        <tr>
                            <td>bondg</td>
                            <td>
                                <input class="form-control" type="text" name="bondg" value="" required>
                                <input type="hidden" name="id_user" value="<?= $id_user = $_SESSION['id_user']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Permintaan</td>
                            <td><input class="form-control" type="date" name="tgl_permintaan" value="<?= isset($d['tgl_permintaan']) ? $d['tgl_permintaan'] : date('Y-m-d') ?>" required></td>
                        </tr>
                        <tr>
                            <td>Nama Pelapor</td>
                            <td><input class="form-control" type="text" name="nama_pelapor" value="" required></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class="form-control" type="text" name="alamat" value="" required></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td><input class="form-control" type="text" name="no_hp" value="" required></td>
                        </tr>
                        <tr>
                        <tr>
                            <td>Nomor KWH</td>
                            <td><input class="form-control" type="text" name="no_kwh" value="" required></td>
                        </tr>
                       
                        <tr>
                            <td>Indikasi</td>
                            <td><input class="form-control" type="text" name="indikasi" value="" required></td>
                        </tr>
                        <tr>
                            <td>Photo KWH</td>
                            <td><input class="form-control" type="file" name="photo_kwh" value="" required></td>
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
