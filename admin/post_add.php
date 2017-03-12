<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:login.php");
	exit();
}
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
		$sql = "INSERT INTO post (name, content, des, keyword, image, hot, status, cate_id, sub_id, user_id) VALUES ('$post_title', '$post_content', '$post_des', '$post_keyword', '$post_image', '$post_hot', '$post_status','$cate_id', '$sub_id', '$user_id')";
		mysqli_query($conn, $sql);
		mysqli_close($conn);
		header("location:post.php");
		exit();
	}
}
?>

<div class="cell-row">
	<div class="container cell cell-middle">
		<h1 class="xlarge">Thêm bài viết</h1>
	</div>
	<div class="container cell cell-middle">
		<div class="right">
			<button class="btn teal riple" type="submit" form="post_add" value="Insert" name="ok">Add</button>
		</div>
	</div>
</div>
<form action="post_add.php" method="post" id="post_add">
	<div class="row-padding">
		<div class="threequarter">
			<p>
				<input type="text" class="input border" name="post_title" placeholder="Tiêu đề bài viết">
			</p>
			<p>
				<textarea name="post_content" id="post_content" rows="10" class="input border"></textarea>
				
			</p>
			<p>
				<label for="" class="validate">Description</label>
				<textarea name="post_des" id="" rows="5" class="input border"></textarea>
			</p>
			<p>
				<label for="" class="validate">Keywords</label>
				<input type="text" class="input border" name="post_keyword">
			</p>
			<div class="row">
				<div class="col" style="width: 19.999%;">
					<div class="padding">
						<a href="../library/filemanager/dialog.php?type=2&field_id=fieldID1" class="iframe-btn"><img src="../public/images/product.jpg" alt="images" id="prev-img1" class="image"></a>
						<input type="text" value="" id="fieldID1" class="input border" name="post_image">
					</div>
				</div>
				<div class="col" style="width: 19.999%;">
					<div class="padding">
						<a href="../library/filemanager/dialog.php?type=2&field_id=fieldID2" class="iframe-btn"><img src="../public/images/product.jpg" alt="images" id="prev-img2" class="image"></a>
						<input type="text" value="" id="fieldID2" class="input border" name="post_image">
					</div>
				</div>
				
			
			</div>
		</div>
		<div class="quarter">
			<div class="white card-2">
				<p class="padding light-grey">Ảnh đại diện</p>
				<div class="padding">
					<a href="../library/filemanager/dialog.php?type=1&field_id=fieldID" class="iframe-btn"><img src="../public/images/img.jpg" alt="images" id="prev-img" class="image"></a>
					<input type="hidden" value="../public/images/img.jpg" id="fieldID" class="input border" name="post_image">
				</div>
			</div>
			
			<div class="white card-2">
				<p class="padding light-grey">Danh mục</p>
				<div class="padding">
					<select name="cate_id" id="cate_id" class="select white">
					<option>Chọn danh mục</option>
					<?php
					require("../library/conn.php");
					$sql1 = "SELECT cate_id, cate_name FROM cate";
					$re1 = mysqli_query($conn, $sql1);
					while ($data1 = mysqli_fetch_assoc($re1)) {
						echo "<option value='$data1[cate_id]'>$data1[cate_name]</option>";
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
					</select>
				</div>
			</div>
			<div class="white card-2">
				<p class="padding light-grey">Thương hiệu</p>
				<div class="padding">
					<select name="brand_id" id="brand_id" class="select white">
					<option>Chọn thương hiệu</option>
					<?php
					require("../library/conn.php");
					$sql1 = "SELECT brand_id, brand_name FROM brand";
					$re1 = mysqli_query($conn, $sql1);
					while ($data1 = mysqli_fetch_assoc($re1)) {
						echo "<option value='$data1[brand_id]'>$data1[brand_name]</option>";
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
						<input type="radio" name="post_hot" value="1" > Bật
						<input type="radio" name="post_hot" value="0" checked> Tắt
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
<script>
/*Tynimce*/
tinymce.init({
selector: "#post_content",
theme: "modern",
height: 300,
plugins: [
     "advlist autolink link image lists charmap print code preview hr anchor pagebreak",
     "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
     "table contextmenu directionality emoticons paste textcolor responsivefilemanager "
],
relative_urls: false,

filemanager_title:"Responsive Filemanager",
filemanager_crossdomain: true,
external_filemanager_path:"http://nhap5.dev/library/filemanager/",
external_plugins: { "filemanager" : "http://nhap5.dev/library/filemanager/plugin.min.js"},

image_advtab: true,
toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
toolbar2: "| responsivefilemanager | image | media | link unlink anchor | print code preview"
 });
/*Images manager*/
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
// Image gallery
/*function responsive_filemanager_callback(field_id){
var	image1 = $('#' + field_id).val();
$('#prev-img1').attr('src', image1);
}
function responsive_filemanager_callback(field_id){
var	image2 = $('#' + field_id2).val();
$('#prev-img2').attr('src', image);
}*/

/*function clear_img() {
	var imagem1 = '../public/images/product.jpg';
	$('#prev_img1').attr('src', imagem1);
	$('#fieldID1').val('');
}
function clear_img() {
	var imagem2 = '../public/images/product.jpg';
	$('#prev_img2').attr('src', imagem2);
	$('#fieldID2').val('');
}
function clear_img() {
	var imagem3 = '../public/images/product.jpg';
	$('#prev_img3').attr('src', imagem3);
	$('#fieldID3').val('');
}
function clear_img() {
	var imagem4 = '../public/images/product.jpg';
	$('#prev_img4').attr('src', imagem4);
	$('#fieldID4').val('');
}
function clear_img() {
	var imagem5 = '../public/images/product.jpg';
	$('#prev_img5').attr('src', imagem5);
	$('#fieldID5').val('');
}*/
// Sub categories					
$(document).ready(function(){
	$("#cate_id").change(function(){
		id = $("#cate_id").val();
		$.ajax ({
			url:"js/xuly_post_add.php",
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
</script>