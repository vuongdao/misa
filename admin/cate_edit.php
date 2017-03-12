<?php
require("templates/header.php");
$id = $_GET["id"];
settype($id, "int");
if(isset($_POST["ok"])) {
	$name = $_POST["name"];
	if (empty($_POST["slug"])) {
		require("../library/slug.php");
		$slug = slug($name);
	} else {
		$slug = $_POST["slug"];
	}
	$des = $_POST["des"];
	$tt= $_POST["tt"];
	$status = $_POST["status"];
	if ($name) {
		require("../library/conn.php");
		$sql = "UPDATE cate SET cate_name='$name', cate_slug='$slug', cate_des='$des', cate_tt='$tt', cate_status='$status' WHERE cate_id='$id'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:cate.php");
		exit();
	}
}
require("../library/conn.php");
$sql1 = "SELECT * FROM cate WHERE cate_id = '$id'";
$re1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($re1);

?>

<div class="container">
    <h2 class="xlarge">Sửa danh mục</h2>
    <form action="cate_edit.php?id=<?php echo $id ?>" method="post">
      <p>
        <label for="" class="label">Name</label>
        <input type="text" class="input border" name="name" value="<?php echo $data1['cate_name'] ?>" required>
      </p>
      <p>
        <label for="" class="label">Slug</label>
        <input type="text" class="input border" name="slug" value="<?php echo $data1['cate_slug'] ?>" placeholder="Tự động">
      </p>
      <p>
        <label for="" class="label">Description</label>
        <textarea name="des" id="" rows="5" class="input border"><?php echo $data1['cate_des'] ?></textarea>
      </p>
      <p>
        <label for="" class="label">Order</label>
        <input type="text" class="input" name="tt" value="<?php echo $data1['cate_tt'] ?>">
      </p>
      <p>
        <label for="" class="label">Status: </label>
        <?php
        if ($data1['cate_status']=='1') {
        	echo "<input type='radio' name='status' value='1' checked> Bật";
        	echo "<input type='radio' name='status' value='0'> Tắt";
    	} else {
    		echo "<input type='radio' name='status' value='1'> Bật";
    		echo "<input type='radio' name='status' value='0' checked> Tắt";
    	}
        ?>
      </p>
      <p>
        <button class="btn blue ripple" type="submit" value="Update" name="ok">Sửa</button>
      </p>
    </form>
  </div>
<?php
mysqli_close($conn);
require("templates/footer.php");
?>