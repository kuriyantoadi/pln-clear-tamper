<?php 
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}
?>

	<title>Export Data Ke Excel</title>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
	}
	.back {
		text-decoration: none;
		color: white;
		background: red;
		border-radius: 10px;
		padding: 8px 10px;
		margin: 10px;
	}
	.export {
		text-decoration: none;
		color: white;
		background: blue;
		border-radius: 10px;
		padding: 8px 10px;
	}
	</style>
<?php 
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pegawai.xls");
?>

	<table id="tabel_js" class="table table-primary">
        <thead>
            <th>No</th>
            <th>Bondg</th>
            <th>Tanggal Permintaan</th>
            <th>Nama Pelapor</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>No KWH</th>
            <th>Indikasi</th>
            <th>Photo KWH</th>
            <th>Id User</th>
            <th>Clear Tamper</th>
            <th>Status Permintaan</th>
		</thead>
		<?php 
		// koneksi database
        include('../koneksi.php');

		$tahun = htmlspecialchars($_POST['tahun']);

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"SELECT * FROM `tb_clear_tamper` 
										WHERE YEAR(`tgl_permintaan`) = $tahun;");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $d['bondg']; ?></td>
            <td><?php echo date('d M Y', strtotime($d['tgl_permintaan'])); ?></td>
            <td><?php echo $d['nama_pelapor']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <!-- Ensure 'No HP' is treated as text -->
            <td><?php echo '="' . $d['no_hp'] . '"'; ?></td>
            <!-- Ensure 'No KWH' is treated as text -->
            <td><?php echo '="' . $d['no_kwh'] . '"'; ?></td>
            <td><?php echo $d['indikasi']; ?></td>
            <td><?php echo $d['photo_kwh']; ?></td>
            <td><?php echo $d['id_user']; ?></td>
            <td><?php echo $d['clear_tamper']; ?></td>
            <td><?php echo $d['status_permintaan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>