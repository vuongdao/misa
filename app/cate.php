<?php
$id = $_GET["id"];
require("templates/header.php");
?>
<div class="content">
	<?php
	require("library/conn.php");
	$sql = "SELECT cate_id, cate_title FROM cate where cate_id='$id'";
	$re = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($re);
	echo "<h2 class='center'>$data[cate_title]</h2>";

	$sql2 = "SELECT a.post_id, a.cate_id, b.post_title FROM post_cate as a INNER JOIN post as b ON a.post_id=b.post_id WHERE a.cate_id='$data[cate_id]'";
	$re2 = mysqli_query($conn, $sql2);
	while ($data2 = mysqli_fetch_assoc($re2)) {
		echo "<div class='card white section container'>";
			echo "<h2 class='medium'>$data2[post_title]</h2>";
		echo "</div>";
	}

	mysqli_close($conn);
	?>
</div>


<div class="content">


<?php
	require("library/conn.php");
	$sql3 = "SELECT * FROM cate";
	$re3 = mysqli_query($conn, $sql3);
	$cate = array();
	while ($row = mysqli_fetch_assoc($re3)){
	    $cate[] = $row;
	}
	// BƯỚC 2: HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
	function showCate($cate, $cate_parent = 0, $char = '', $stt = 0)
	{
	    // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
	    $cate_child = array();
	    foreach ($cate as $key => $item)
	    {

        // Nếu là chuyên mục con thì hiển thị
	        if ($item['cate_parent'] == $cate_parent)
	        {
	            $cate_child[] = $item;
	            unset($cate[$key]);
	        }
	    }
	     
	    // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
	    if ($cate_child)
	    {
	        if ($stt == 0){
	            echo "<ul class='navbar red'>";
	            echo "<li>";
	        }
	        else if ($stt == 1){
	            echo "<ul>";
	            echo "<li>";
	        }
	        else if ($stt == 2){
	            echo "<ul>";
	            echo "<li>";
	        }
	         
	        foreach ($cate_child as $key => $item)
	        {
				echo .$item[cate_title];
	            showCate($cate, $item[cate_id], $char.'|---', ++$stt);
	        }
	            echo "</li>";

	        echo "</ul>";
	    }
	}
	mysqli_close($conn);

showCate($cate); ?>

</div>

