<?php
$koneksi = mysqli_connect("localhost", "root", "", "db2");
if(!$koneksi){
	die("connection fail : " . mysqli_connect_error());
}
?>