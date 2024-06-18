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
                            <div class="page-header-icon"><i data-feather="database"></i></div>
                             Rekap Clear Tamper
                        </h1>
                        <div class="page-header-subtitle">Halaman Rekap Clear Tamper</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    

<div class="container-xl px-4 mt-n10">
    <div class="card mb-4">
        <div class="card-header">Menu Rekap Clear Tamper</div>
        <div class="card-body">

            <?php include('../alert.php'); ?>

			<p style="text-align: justify;">Selamat datang di halaman unduhan rekap Clear Tamper! Di sini, Anda dapat mengakses laporan lengkap yang mencakup data harian, bulanan, dan tahunan. Laporan ini dirancang untuk memberikan wawasan mendalam tentang aktivitas dan performa Clear Tamper, membantu Anda dalam analisis dan pengambilan keputusan yang lebih baik.</p>

			<table class="">
				<tr>
					<th>Rekap Full</th>
				</tr>
				<tr>
					<td>
						<a href="clear_tamper_export.php" class="btn btn-primary btn-sm"><i data-feather="plus"></i> Download Full Rekap</a>
					</td>
				</tr>
				<tr>
					<th>Rekap Harian</th>
				</tr>
				<tr>
					<td>
						<form action="clear_tamper_export_harian.php" method="post">
						<input type="date" name="tgl_permintaan" required>
						<input type="submit" class="btn btn-primary btn-sm" >
						</form><br>
					</td>
				</tr>

				<tr>
					<th>Rekap Bulanan</th>
				</tr>
				<tr>
					<td>
					<form action="clear_tamper_export_bulanan.php" method="post">
						Bulan
						<select name="bulan" id="">
							<option value="01">Januari</option>
							<option value="02">Februari</option>
							<option value="03">Maret</option>
							<option value="04">April</option>
							<option value="05">Mei</option>
							<option value="06">Juni</option>
							<option value="07">Juli</option>
							<option value="08">Agustus</option>
							<option value="09">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="11">Desember</option>
						</select>
						Tahun
						<select name="tahun" id="">
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
						</select>
						<input type="submit" class="btn btn-primary btn-sm" value="Download" >
					</form><br>
					</td>
				</tr>

				<tr>
					<th>Rekap Tahunan</th>
				</tr>
				<tr>
					<td>
						<form action="clear_tamper_export_tahun.php" method="post">
							<select name="tahun" id="">
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								<option value="2027">2027</option>
								<option value="2028">2028</option>
								<option value="2029">2029</option>
								<option value="2030">2030</option>
							</select>
						<input type="submit" class="btn btn-primary btn-sm" >
						</form>
					</td>
				</tr>
			</table>
			<br>
        </div>
    </div>



<?php include('../template/footer.php') ?>
