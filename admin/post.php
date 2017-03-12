<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:login.php");
	exit();
}
require("templates/header.php");
?>
<div class="cell-row section">
	<div class="container cell cell-middle">
		<h1 class="xlarge">Post</h1>
	</div>
	<div class="container cell cell-middle">
		<div class="bar">
			<input type="text" class="input border" placeholder="Seach posts...">
		</div>
	</div>
	<div class="container cell cell-middle">
		<div class="right">
			<a href="post_add.php" class="btn teal riple">Add post</a>
		</div>
	</div>
</div>
<div class="responsive container">
	<table class="table-all">
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Categories</th>
			<th>Hot</th>
			<th>Status</th>
			<th>Views</th>
			<th>Date</th>
		</tr>
		<?php
		require("../library/conn.php");
		$sql = "SELECT a.id, a.name, a.user_id, a.cate_id, a.sub_id, a.hot, a.status, a.date, a.view, b.cate_id, b.cate_name, c.sub_id, c.sub_name FROM post as a INNER JOIN cate as b ON a.cate_id=b.cate_id LEFT JOIN sub as c ON a.sub_id=c.sub_id";
		$re = mysqli_query($conn, $sql);
		while ($data = mysqli_fetch_assoc($re)) {
			echo "<tr class='tooltip'>";
				echo "<td style='height:62px;min-width:160px;'>$data[name]<br>";
					echo "<span class='text small'><a href='post_edit.php?id=$data[id]' alt='Sửa bài viết' class='text-yellow hover-opacity'>Edit<span class='text-grey'> | </span</i></a><a href='post_del.php?id=$data[id]' alt='Xóa bài viết' class='text-red hover-opacity'>Delete<span class='text-grey'> | </span></a><a href='#' alt='Xem' class='text-blue hover-opacity'>View</a></span>";
				echo "</td>";
				echo "<td>$data[user_id]</td>";
				if ($data["sub_name"]) {
					echo "<td>$data[cate_name], $data[sub_name]</td>";
				} else {
					echo "<td>$data[cate_name]</td>";
				}
				echo "<td>";
				if ($data["hot"] == '1') {
					echo "<span class='tag red'>Hot</span>";
				} else {
					echo "<span class='tag grey'></span>";
				}
				echo "</td>";
				echo "<td>";
				if ($data["status"] == '1') {
					echo "<span class='tag green'>Bật</span>";
				} else {
					echo "<span class='tag grey'>Tắt</span>";
				}
				echo "</td>";
				echo "<td>$data[view]</td>";
				echo "<td>$data[date]</td>";
			echo "</tr>";
		}
		mysqli_close($conn);
		?>
	</table>
</div>
