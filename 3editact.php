<?php
include '3koneksi.php';

$ID = $_POST['id'];
$NAMA = $_POST['nama'];
$EMAIL = $_POST['email'];
$ISI = $_POST['isi'];
echo $id;

mysqli_query($koneksi,"UPDATE `data_pegawai` SET `id` = '$id', `nama` = '$nama', `email` = '$email', `isi` = '$isi' WHERE `data_pegawai` . `id` = $id;");

header("location:3A.php");
?> 