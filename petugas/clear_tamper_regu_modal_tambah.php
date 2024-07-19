

<!-- Modal tambah Awal-->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan Clear Tamper Regu</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="clear_tamper_regu_tambah.php" id="formtambahClearTamper" method="post" enctype="multipart/form-data">
                    <!-- Menyimpan ID pengguna yang sedang ditambah -->
                    <table class="table table-hover">
                        <tr>
                            <td>Nama Petugas 1</td>
                            <td><input class="form-control" type="text" value="<?= $username ?>" id="inputid_user1" required readonly>
                            <input class="form-control" type="hidden" name="id_user1" value="<?= $id_user ?>" id="inputid_user1">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Petugas 2</td>
                            <td>
                                <select name="id_user2" class="form-control" id="">
                                <option value="">Pilihan</option>                                
                                    <?php
                                        $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_2 = mysqli_fetch_array($d1)) {
                                    ?>
                                        <option value="<?php echo $d_petugas_2['id_user']?>"><?php echo $d_petugas_2['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>     
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Petugas 3</td>
                            <td>
                                <select name="id_user3" class="form-control" id="">
                                <option value="">Pilihan</option>                                
                                    <?php
                                        $d1 = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE jabatan = 'petugas' ORDER BY nama_petugas ASC;");
                                        while ($d_petugas_3 = mysqli_fetch_array($d1)) {
                                    ?>
                                        <option value="<?php echo $d_petugas_3['id_user']?>"><?php echo $d_petugas_3['nama_petugas'] ?></option>
                                    <?php } ?>
                                </select>  
                                <!-- <input class="form-control" type="hidden" name="id_user3" value="<?= htmlspecialchars($d['id_user3'])?>" id="inputid_user3">                              -->
                            </td>
                        </tr>
                        <tr>
                            <td>bondg</td>
                            <td><input class="form-control" type="text" name="bondg" value="" require></td>
                        </tr>
                        <tr>
                            <td>Tanggal Permintaan</td>
                            <td><input class="form-control" type="date" name="tgl_permintaan" value="" require></td>
                        </tr>
                        <tr>
                            <td>Nama Pelapor</td>
                            <td><input class="form-control" type="text" name="nama_pelapor" value="" require></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class="form-control" type="text" name="alamat" value="" require></td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td><input class="form-control" type="text" name="no_hp" value="" require></td>
                        </tr>
                        <tr>
                            <td>No KWH</td>
                            <td><input class="form-control" type="text" name="no_kwh" id="inputNokwh" value="" require></td>
                        </tr>
                        <tr>
                            <td>Indikasi</td>
                            <td>
                                <input class="form-control" type="text" name="indikasi" value="" require>
                                <input type="hidden" name="id_clear_tamper_regu" class="form-control" value="<?= $d['id_clear_tamper_regu'] ?>" require>
                            </td>
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
<!-- Modal tambah Akhir -->