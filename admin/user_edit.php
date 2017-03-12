<?php
require("templates/header.php");
$id = $_GET["id"];
if (isset($_POST["ok"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$level = $_POST["level"];
	if($username && $password && $level) {
		require("../library/conn.php");
		$sql = "UPDATE user SET username='$username', password='$password', email='$email', level='$level' WHERE user_id='$id'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:user.php");
		exit();
	}
}
require("../library/conn.php");
$sql1 = "SELECT * FROM user WHERE user_id='$id'";
$re1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($re1);
?>
<div class="container">
	<form action="user_edit.php?id=<?php echo $id ?>" method="post">
		<p>
			<label for="" class="label validate">Username</label>
			<input type="text" class="input" name="username" value="<?php echo $data1[username] ?>">
		</p>
		<p>
			<label for="" class="label validate">Password</label>
			<input type="password" class="input" name="password" value="<?php echo $data1[password] ?>">
		</p>
		<p>
			<label for="" class="label validate">Email</label>
			<input type="email" class="input" name="email" value="<?php echo $data1[email] ?>">
		</p>
		<p>
			<label for="" class="label validate">Level</label>
			<input type="text" class="input" name="level" value="<?php echo $data1[level] ?>">
		</p>
		<p>
			<button class="btn theme ripple" type="submit" value="Insert" name="ok">Update</button>
		</p>
	</form>
</div>
<?php
mysqli_close($conn);
?>