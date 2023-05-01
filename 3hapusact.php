<?php
include '3koneksi.php';

$ID = $_POST['id'];
$NAMA = $_POST['nama'];
$EMAIL = $_POST['email'];
$ISI = $_POST['isi'];
echo $id;

mysqli_query($koneksi, "DELETE FROM `data_pegawai` WHERE `data_pegawai`.`id` = $id");

header("location:3A.php");
?> 