<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:login.php");
	exit();
}
$id = $_GET["id"];
require("templates/header.php");
if (isset($_POST["ok"])) {
	$post_title = $_POST["post_title"];
	$post_content = $_POST["post_content"];
	$post_des = $_POST["post_des"];
	$post_keyword = $_POST["post_keyword"];
	$post_image = $_POST["post_image"];
	$post_hot = $_POST["post_hot"];
	$post_status = $_POST["post_status"];
	$cate_id = $_POST["cate_id"];
	$sub_id = $_POST["sub_id"];
	$user_id = $_POST["cate_id"];
	if ($post_title) {
		require("../library/conn.php");
		$sql = "UPDATE  post SET name='$post_title', content='$post_content', des='$post_des', keyword='$post_keyword', image='$post_image', hot='$post_hot', status='$post_status', cate_id='$cate_id', sub_id='$sub_id', user_id='$user_id' WHERE id='$id'";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:post.php");
		exit();
	}
}
require("../library/conn.php");
$sql1 = "SELECT * FROM post WHERE id='$id'";
$re1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($re1);
?>
<div class="cell-row">
	<div class="container cell cell-middle">
		<h1 class="xlarge">Sửa bài viết</h1>
	</div>
	<div class="container cell cell-middle">
		<div class="right">
			<button class="btn teal riple" type="submit" form="post_add" value="Update" name="ok">Update</button>
		</div>
	</div>
</div>
<form action="post_edit.php?id=<?php echo $id ?>" method="post" id="post_add">
	<div class="row-padding">
		<div class="threequarter">
			<p>
				<input type="text" class="input border" name="post_title" placeholder="Tiêu đề bài viết" value="<?php echo $data1[name] ?>">
			</p>
			<p>
				<textarea name="post_content" id="post_content" rows="10" class="input border"><?php echo $data1[content] ?></textarea>
				
			</p>
			<p>
				<label for="" class="validate">Description</label>
				<textarea name="post_des" id="" rows="5" class="input border"><?php echo $data1[des] ?></textarea>
			</p>
			<p>
				<label for="" class="validate">Keywords</label>
				<input type="text" class="input border" name="post_keyword" value="<?php echo $data1[keyword] ?>">
			</p>
		</div>
		<div class="quarter">
			<div class="white card-2">
				<p class="padding light-grey">Hình ảnh</p>
				<div class="padding">
					<a href="../library/filemanager/dialog.php?type=1&field_id=fieldID" class="iframe-btn"><img src="<?php echo $data1[image] ?>" alt="<?php echo $data1[name] ?>" id="prev-img" class="image"></a>
					<input type="hidden" value="<?php echo $data1[image] ?>" id="fieldID" class="input border" name="post_image">
				</div>
			</div>
			
			<!-- <script>
				$(document).ready(function(){
					$("#cate_id").change(function(){
						id = $("#cate_id").val();
						sub = $sub.val();
						$.ajax ({
							url:"js/xuly_post_edit.php",
							type:"post",
							data:"cate_id="+id,
							async: true,
							success:function(kq){
								$("#sub_id").html(kq);
							}
			
						});
						return false;
					});
				});
			</script> -->

			<div class="white card-2">
				<p class="padding light-grey">Danh mục</p>
				<div class="padding">
					<select name="cate_id" id="cate_id" class="select white">
					<option>Chọn danh mục</option>
					<?php
					require("../library/conn.php");
					$sql2 = "SELECT cate_id, cate_name FROM cate";
					$re2 = mysqli_query($conn, $sql2);
					while ($data2 = mysqli_fetch_assoc($re2)) {
						if ($data1[cate_id] == $data2[cate_id]) {
							$cate_sub = $data2[cate_id];
							echo "<option value='$data2[cate_id]' selected='selected'>$data2[cate_name]</option>";
						} else {
							echo "<option value='$data2[cate_id]'>$data2[cate_name]</option>";
						}
					}
					?>
					</select>
				</div>
			</div>

			<div class="white card-2">
				<p class="padding light-grey">Danh mục con</p>
				<div class="padding">
					<select name="sub_id" id="sub_id" class="select white">
						<option value="0">Chọn danh mục con</option>
						<?php
						require("../library/conn.php");
						$sql3 = "SELECT sub_id, sub_name, cate_id FROM sub";
						$re3 = mysqli_query($conn, $sql3); 
						while ($data3 = mysqli_fetch_assoc($re3)) {
							if ($data1[sub_id] == $data3[sub_id]) {
								echo "<option value='$data3[sub_id]' selected='selected'>$data3[sub_name]</option>";
							} else {
								echo "<option value='$data3[sub_id]'>$data3[sub_name]</option>";
							}
						}
						?>
					</select>
				</div>
			</div>
			<div class="white card-2">
				<p class="padding light-grey">Public</p>
				<div class="container">
					<p>
						<label for="" class="label validate">Hot: </label>
						<?php
						if ($data1[hot] == 1) {
							echo "<input type='radio' name='post_hot' value='1' checked> Bật";
							echo "<input type='radio' name='post_hot' value='0'> Tắt";
						} else {
							echo "<input type='radio' name='post_hot' value='1'> Bật";
							echo "<input type='radio' name='post_hot' value='0' checked> Tắt";
						}
						?>
					</p>
					<p>
						<label for="" class="label validate">Status: </label>
						<input type="radio" name="post_status" value="1" checked> Bật
						<input type="radio" name="post_status" value="0"> Tắt
					</p>
					
				</div>
			</div>

		</div>
	</div>
</form>
<?php
mysqli_close($conn);
?>
<script>
tinymce.init({
selector: "#post_content",
theme: "modern",
height: 300,
plugins: [
     "advlist autolink link image lists charmap print preview hr anchor pagebreak",
     "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
     "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
],
relative_urls: false,

filemanager_title:"Responsive Filemanager",
filemanager_crossdomain: true,
external_filemanager_path:"http://nhap3.dev/library/filemanager/",
external_plugins: { "filemanager" : "http://nhap3.dev/library/filemanager/plugin.min.js"},

image_advtab: true,
toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print code preview"
 });

$('.iframe-btn').fancybox({	
	'width'		: 900,
	'height'	: 600,
	'type'		: 'iframe',
    'autoScale'    	: false
	  });

$(document).ready(function(){
	$('.fancy').fancybox();
});

function responsive_filemanager_callback(field_id){
var	image = $('#' + field_id).val();
$('#prev-img').attr('src', image);
}
					
</script>