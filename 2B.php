<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE data_pegawai (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  isi TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Table data_pegawai created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>