<?php
include '3koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$isi = $_POST['isi'];

mysqli_query($koneksi,"INSERT INTO `data_pegawai` (`id`,`nama`, `email`, `isi`)
	VALUES (NULL, '$id', '$nama', '$email', '$isi')");

header("location:3A.php");
?> 