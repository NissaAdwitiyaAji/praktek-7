<!DOCTYPE html>
<html>
    <body>
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

        $sql = "SELECT Id_BT, Nama, Email, Isi FROM buku_tamu";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            //output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Id_BT: ". $row["Id_BT"]. " - Nama: ".$row["Nama"]." - Email: ".$row["Email"]." - Isi: ".$row["Isi"]."<br>";
            }
        } else {
            echo "0 results";
        }
        mysqli_close($conn);
        ?>
    </body>
</html>