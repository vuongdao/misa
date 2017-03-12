<?php
require("templates/header.php");
if (isset($_POST["ok"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$level = $_POST["level"];
	if($username && $password && $level) {
		require("../library/conn.php");
		$sql = "INSERT INTO user (username, password, email, level) VALUES ('$username', '$password', '$email', '$level')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:user.php");
		exit();
	}
}
?>
<div class="container">
	<form action="user_add.php" method="post">
		<p>
			<label for="" class="label validate">Username</label>
			<input type="text" class="input" name="username">
		</p>
		<p>
			<label for="" class="label validate">Password</label>
			<input type="password" class="input" name="password">
		</p>
		<p>
			<label for="" class="label validate">Email</label>
			<input type="email" class="input" name="email">
		</p>
		<p>
			<label for="" class="label validate">Level</label>
			<input type="text" class="input" name="level">
		</p>
		<p>
			<button class="btn theme ripple" type="submit" value="Insert" name="ok">Add</button>
		</p>
	</form>
</div>