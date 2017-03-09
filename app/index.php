<?php
require("templates/header.php");
if(isset($_POST["ok"])) {
	$post_title = $_POST["post_title"];
	require("library/conn.php");
	$sql = "INSERT INTO post (post_title) VALUES ('$post_title')";
	mysqli_query($conn, $sql);
	$last_id = mysqli_insert_id($conn);

    foreach($_POST['cate_id'] as $i) { 
		$sql1 = "INSERT INTO post_cate(post_id, cate_id) VALUES ('$last_id', '$i')";
		mysqli_query($conn, $sql1);
	}
	mysqli_close($conn);
}
?>
<div class="content">
	<form action="index.php" method="post">
		<p>
			<label for="" class="label">Tên bài viết</label>
			<input type="text" name="post_title" class="input border">
		</p>
		
		<p><label for="" class="label">Danh mục</label></p>
		<p>
			<?php
			require("library/conn.php");
			$sql2 = "SELECT cate_id, cate_title FROM cate";
			$re2 = mysqli_query($conn, $sql2);
			while ($data2 = mysqli_fetch_assoc($re2)) {
				echo "<input type='checkbox' name='cate_id[]' value='$data2[cate_id]'> $data2[cate_title]<br>";
			}
			mysqli_close($conn);
			?>
		</p>
	    <p>
	    	<button class="btn red" type="submit" value="Insert" name="ok">Add</button>
	    </p>
	</form>
</div>

