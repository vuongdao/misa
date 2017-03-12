
<?php
$loi["login"] = NULL;
session_start();
if (isset($_POST["ok"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	if ($username && $password) {
		require("../library/conn.php");
		$_username = mysqli_real_escape_string($conn, $username);
		$sql = "SELECT * FROM user WHERE username='$_username' and password='$password'";
		$re = mysqli_query($conn, $sql);
		if (mysqli_num_rows($re) == 1) {
			$data = mysqli_fetch_assoc($re);
			$user_id = $data[user_id];
			$_SESSION["username"] = $username;
			$level = $data[level];
			header("location:index.php");
			exit();
		} else {
			$loi["login"] = "* Wrong username or password.";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập hệ thống</title>
	<meta name="viewport" content="initial-scale=1.0,width=device-width,user-scalable=no">
	<meta name="description" content="Đăng nhập hệ thống">
	<link rel="stylesheet" href="../public/css/w3.css">
 	<link rel="stylesheet" href="../public/css/w3-theme-blue-grey.css">
	<link rel="stylesheet" href="../public/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="content container padding-top" style="min-height:600px;">
	<?php
	if ($loi["login"]) {
		echo '<div class="container padding-24 red">';
		echo $loi["login"];
		echo "</div>";
	}
	?>
	<form action="login.php" method="post">
		<p>
			<label for="" class="label">Username</label>
			<input type="text" class="input" name="username" required>
		</p>
		<p>
			<label for="" class="label">Password</label>
			<input type="password" class="input" name="password" required>
		</p>
		<p>
			<button class="btn theme ripple" type="submit" value="Login" name="ok">Login</button>
		</p>
	</form>
</div>
</body>
</html>