<?php
require("templates/header.php");
?>
<div class="cell-row">
	<div class="cell cell-middle container">
		<h2 class="xlarge">Users</h2>
	</div>
	<div class="cell cell-middle container">
		<div class="right">
			<a href="user_add.php" title="Thêm người dùng" class="btn theme ripple"><i class="fa fa-plus"></i></a>
		</div>
	</div>
</div>
<div class="responsive container">
	<table class="table-all">
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>Emal</th>
			<th>Password</th>
			<th>Level</th>
		</tr>
		<?php
		require("../library/conn.php");
		$stt = 1;
		$sql = "SELECT * FROM user";
		$re = mysqli_query($conn, $sql);
		while ($data = mysqli_fetch_assoc($re)) {
		echo "<tr class='tooltip'>";
			echo "<td>$stt</td>";
			echo "<td style='height:62px;min-width:200px;'>$data[username]<br><span class='text small'><a href='user_edit.php?id=$data[user_id]' class='text-green'>Edit<span class='text-grey'> | </span></a><a href='user_del.php?id=$data[user_id]' class='text-red'>Delete</a></span></td>";
			echo "<td>$data[email]</td>";
			echo "<td>$data[password]</td>";
			echo "<td>$data[level]</td>";
		echo "</tr>";
		$stt++;
		}
		mysqli_close($conn);
		?>
	</table>
</div>