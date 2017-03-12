<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:login.php");
	exit();
}
if(isset($_POST["ok"])) {
	$name = $_POST["name"];
	if (empty($_POST["slug"])) {
		require("../library/slug.php");
		$slug = slug($name);
	} else {
		$slug = $_POST["slug"];
	}
	$cate_id = $_POST["cate_id"];
	$des = $_POST["des"];
	$tt = $_POST["tt"];
	$status = $_POST["status"];
	if ($name) {
		require("../library/conn.php");
		$sql = "INSERT INTO sub (sub_name, cate_id, sub_slug, sub_des, sub_tt, sub_status) VALUES ('$name', '$cate_id', '$slug', '$des', '$tt', '$status')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:sub.php");
		exit();
	}
}
?>