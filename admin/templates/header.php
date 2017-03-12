<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Thực hành php</title>
	<meta name="viewport" content="initial-scale=1.0,width=device-width,user-scalable=no">
	<meta name="description" content="Thục hành php viết trang web tin tức.">
	<link rel="stylesheet" href="../public/css/w3.css">
 	<link rel="stylesheet" href="../public/css/w3-theme-blue-grey.css">
	<link rel="stylesheet" href="../public/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../library/fancybox/jquery.fancybox.css" type="text/css">

	<script src="../public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="../library/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
	<script src="../library/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>

</head>
<style>
@media screen and (min-width: 601px) {
	#main {
		margin-left: 180px;
	}
	.sidenav {
		width: 180px;
	}
	.opennav {
		display:none;
	}
}
@media screen and (max-width: 600px) {
	#main {
		margin-left: 0px;
	}
	.sidenav {
		width: 0px;
	}
	.opennav {
		display: inline-block;
	}
	.closenav {
		display: none;
	}
	.topnav {
		text-align: left;
	}
	.topnav a {
		display: inline-block;
	}
}
</style>
<body>
<header class="top">
<div class="bar xlarge theme">
  <a href="javascript:void(0)" class="left button opennav" onclick="w3_open()" id="openNav">&#9776;</a>
  <a href="javascript:void(0)" class="left button closenav" onclick="w3_close()" id="closeNav">&#9776;</a>
  <a href="index.php" title="Trang chủ" class="bar-item button"><i class="fa fa-home"></i></a>
  <a href="post_add.php" title= "Bài viết mới" class="bar-item button"><i class="fa fa-pencil-square-o"></i> <span class="hide-small">Thêm bài viết</span></a>
  <a href="logout.php" title="Thoát" class="right bar-item button"><i class="fa fa-sign-out"></i></a>
  <a href="http://nhap3.dev" title="Trang web của tôi" target="_blank" class="right bar-item button">My Site</a>
</div>
</header>
<nav class="sidenav large theme-l1 card-2 animate-left padding-16"  id="mySidenav" style="margin-top:-18px;">
  
  <a href="#">Dashboard</a>
  <a href="post.php">Posts</a>
  <a href="cate.php">Categories</a>
  <a href="sub.php">Sub Categories</a>
  <a href="#">Media</a>
  <a href="#">Comments</a>
  <a href="#">Pages</a>
  <a href="user.php">Users</a>
</nav>
<div id="main" style="margin-top:70px;">
<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "180px";
  document.getElementById("mySidenav").style.width = "180px";
  document.getElementById("mySidenav").style.display = "block";
  document.getElementById("openNav").style.display = "none";
  document.getElementById("closeNav").style.display = "inline-block";
}

function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidenav").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
  document.getElementById("closeNav").style.display = "none";
}

</script>





	
