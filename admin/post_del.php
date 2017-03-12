<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:login.php");
	exit();
}
$id = $_GET["id"];
settype($id, "int");
require("../library/conn.php");
$sql = "DELETE FROM post WHERE post_id = '$id'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location:post.php");
exit();
?>