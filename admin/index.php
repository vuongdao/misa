<?php
session_start();
if (isset($_SESSION["username"])) {
	header("location:cate.php");
	exit();
} else {
	header("location:login.php");
	exit();
}
?>