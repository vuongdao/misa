<?php
$cate_id = $_POST["cate_id"];
require("../../library/conn.php");
	$sql3 = "SELECT sub_id, sub_name FROM sub WHERE cate_id='$cate_id'";
	$re3 = mysqli_query($conn, $sql3);
	while ($data3 = mysqli_fetch_array($re3)) {
		echo "<option value='$data3[sub_id]'>$data3[sub_name]</option>";
	}
?>