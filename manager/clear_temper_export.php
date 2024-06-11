<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
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
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
        border-radius: 20px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
    
    <?php 
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=Data Pegawai.xls");
    ?>


	<table>
		<tr>
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
            <th>Clear Temper</th>
            <th>Status Permintaan</th>
		</tr>
		<?php 
		// koneksi database
		$koneksi = mysqli_connect("localhost","root","","pln_clear_tamper");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tb_clear_temper");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['bondg']; ?></td>
            <td><?php echo $d['tgl_permintaan']; ?></td>
            <td><?php echo $d['nama_pelapor']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['no_hp']; ?></td>
            <td><?php echo $d['no_kwh']; ?></td>
            <td><?php echo $d['indikasi']; ?></td>
            <td><?php echo $d['photo_kwh']; ?></td>
            <td><?php echo $d['id_user']; ?></td>
            <td><?php echo $d['clear_temper']; ?></td>
            <td><?php echo $d['status_permintaan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>