
<!-- Modal Tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Permintaan Clear Tamper</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_temper_permintaan.php" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang diedit -->
                    <table class="table">
                        <tr>
                            <td>bondg</td>
                            <td><input class="form-control" type="text" name="bondg" value="" required></td>
                        </tr>
                        <tr>
                            <td>Tanggal Permintaan</td>
                            <td><input class="form-control" type="text" name="tgl_permintaan" value="" required></td>
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
                            <td>Id Pelangan</td>
                            <td><input class="form-control" type="text" name="id_pelanggan" value="" required></td>
                        </tr>
                        <tr>
                            <td>No Meter</td>
                            <td><input class="form-control" type="text" name="no_meter" value="" required></td>
                        </tr>
                        <tr>
                            <td>Indikasi</td>
                            <td><input class="form-control" type="text" name="indikasi" value="" required></td>
                        </tr>
                        <tr>
                            <td>Photo KWH</td>
                            <td><input class="form-control" type="text" name="photo_kwh" value="" required></td>
                        </tr>
                        <!-- <tr>
                            <td>Id User</td>
                            <td><input class="form-control" type="text" name="id_user" value="<?= $d('id_user') ?> " required></td>
                        </tr> -->
                        
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
