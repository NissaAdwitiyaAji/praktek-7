<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buku_tamu (id, nama, email, isi)
VALUES ('001', 'Muslimin', 'musliminyaji@gmail.com', ''), ('002', 'Nur', 'nurh76@gmail.com', ''), ('003', 'Nissa', 'nissaaji@gmail.com', '')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>