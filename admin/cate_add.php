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
	$des = $_POST["des"];
	$tt = $_POST["tt"];
	$status = $_POST["status"];
	if ($name) {
		require("../library/conn.php");
		$sql = "INSERT INTO cate (cate_name, cate_slug, cate_des, cate_tt, cate_status) VALUES ('$name', '$slug', '$des', '$tt', '$status')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:cate.php");
		exit();
	}
}
?>