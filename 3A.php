<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<h1>Data Pegawai</h1>
	<br>
	<table border="1">
		<tr style="background-color: pink;">
			<th>ID</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>ISI</th>
		</tr>
		<?php
		include '3koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM data_pegawai");
		while($d = mysqli_fetch_array($data)) {

		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td width="300" align="left"><?php echo $d['id']; ?></td>
			<td width="300" align="left"><?php echo $d['nama']; ?></td>
			<td width="300" align="left"><?php echo $d['email']; ?></td>
			<td width="300" align="left"><?php echo $d['isi']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
	<br><br><br>
	<a href="3tambah.php">Tambah</a>
	<a href="3hapus.php">Hapus</a>
	<a href="3edit.php">Edit</a>
</body>
</html>