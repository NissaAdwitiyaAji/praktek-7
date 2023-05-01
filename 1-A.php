<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$con = mysqli_connect("localhost","root","","db1");

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>