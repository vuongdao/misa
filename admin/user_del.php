<?php
$id = $_GET["id"];
require("../library/conn.php");
$sql = "DELETE FROM user WHERE user_id='$id'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location:user.php");
exit();
?>