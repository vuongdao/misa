<?php
$servername = "localhost";
$sqlusername = "root";
$sqlpassword = "";
$dbname = "nhap4";

// Create connection
$conn = mysqli_connect($servername, $sqlusername, $sqlpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/*$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);*/

?>