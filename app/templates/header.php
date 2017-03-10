<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if (isset($id)) {
	require("../library/conn.php");
	$sql = "SELECT title FROM news WHERE news_id='$id'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
		echo "<title>$data[title]</title>";
	mysqli_close($conn);
} else {
echo "<title>web ban hang</title>";
}
?>
<link rel="stylesheet" href="../public/js/carousel/owl.carousel.min.css">
<link rel="stylesheet" href="../public/js/carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="../public/css/w3.css" type="text/css">
<link rel="stylesheet" href="../public/css/theme-red.css">
<link rel="stylesheet" href="../public/css/font-awesome-4.7.0/css/font-awesome.min.css">

<script src="../public/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../public/js/carousel/owl.carousel.min.js"></script>

</head>
<body class="light-grey">

<div class="header-top">
	<div class="light-grey">
		<div class="content">
			<div class="container">
				<p>Misashop</p>
			</div>
		</div>
	</div>
</div>
<header class="white">
	<div class="content">
		<div class="row-padding">
			<div class="col l2 padding-16">
				<a href="#"><img src="../public/images/logo.png" alt="Misashop.vn" class="hover-opacity" style="width:147px"></a>
			</div>
			<div class="col l2 padding-16" id="menu">
				
					<div class="white">
					    <img src="../public/images/menu-bars.jpg" alt="" class="left margin-right" style="width:40px;">
					    <span>Tất cả</span><br>
					    <span>danh mục</span>
				    </div>
				    <ul class="cate blue-grey ul">
					    <li><a href="#">Sức khỏe & Sắc đẹp</a>
					      	<ul class="sub-cate ul light-grey" >
					      		<li><a href="#">Dầu gội đầu 1</a></li>
					      		<li><a href="#">Dầu gội đầu 2</a></li>
					      		<li><a href="#">Dầu gội đầu 3</a></li>
					      		
					      	</ul>
					     </li>
					     <li><a href="#">Thực phẩm chức năng</a>
					      	<ul class="sub-cate ul light-grey" >
					      		<li><a href="#">Thuốc bổ não</a></li>
					      		<li><a href="#">Tim mạch - Tiểu đường</a></li>
					      		<li><a href="#">Sinh lý nam</a></li>
					      		
					      	</ul>
					     </li>
					     <li><a href="#">Thực phẩm</a>
					      	<ul class="sub-cate ul light-grey" >
					      		<li><a href="#">Thuốc bổ não</a></li>
					      		<li><a href="#">Tim mạch - Tiểu đường</a></li>
					      		<li><a href="#">Sinh lý nam</a></li>
					      		
					      	</ul>
					     </li>
					     <li><a href="#">Mẹ và bé</a>
					      	<ul class="sub-cate ul light-grey" >
					      		<li><a href="#">Thuốc bổ não</a></li>
					      		<li><a href="#">Tim mạch - Tiểu đường</a></li>
					      		<li><a href="#">Sinh lý nam</a></li>
					      		
					      	</ul>
					     </li>
					     <li><a href="#">Nước hoa</a>
					      	<ul class="sub-cate ul light-grey" >
					      		<li><a href="#">Thuốc bổ não</a></li>
					      		<li><a href="#">Tim mạch - Tiểu đường</a></li>
					      		<li><a href="#">Sinh lý nam</a></li>
					      		
					      	</ul>
					     </li>
				     
				    </ul>
				
			</div>
			<div class="col l4 padding-16">
				<div class="bar">
					<input type="text" class="bar-item border border-red input" placeholder="Tìm kiếm sàn phẩm...">
					<button class="bar-item btn red ripple border border-red">Tìm kiếm</button>
				</div>
			</div>
			<div class="col l3 padding-16">
				<div class="dropdown-hover show-block">
					<div class="white">
					    <img src="../public/images/menu-user.png" alt="" class="left margin-right" style="width:40px;">
						<span>Đăng nhập & Đăng ký<br>tài khoản</span>
				    </div>
				    <div class="dropdown-content border blue-grey" style="width:220px;">
				      đăng ký
				    </div>
				</div>
			</div>
			<div class="col l1 padding-16">
				<div style="position:relative;">
					<a href="#"><img src="../public/images/menu-cart.png" alt="" class="right" style="width:50px;"></a>
					<span class="text-white" style="position:absolute;font-size:11px;overflow: hidden;text-overflow: ellipsis;white-space:nowrap;top:3px;right:3px;width:25px;height:16px;text-align:center;">5</span>
				</div>
			</div>
		</div>
	</div>
</header>
<section class="content">
	<div class="row panel" id="banner-large">
		<div class="col l4">
			<div class="half"><img src="../public/images/banners/a1.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/a2.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/a3.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/a4.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/a5.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/a6.jpg" alt="" class="image"></div>
			
		</div>
		<div class="col l4">
			<div class="col"><img src="../public/images/banners/c1.jpg" alt="" class="image"></div>
			<div class="col"><img src="../public/images/banners/c2.jpg" alt="" class="image"></div>
		</div>
		<div class="col l4">
			<div class="half"><img src="../public/images/banners/d1.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/d2.jpg" alt="" class="image"></div>
			<div class="col"><img src="../public/images/banners/d3.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/d4.jpg" alt="" class="image"></div>
			<div class="half"><img src="../public/images/banners/d5.jpg" alt="" class="image"></div>
		</div>
	</div>
	
</section>

<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("show") == -1) {
        x.className += " show";
    } else { 
        x.className = x.className.replace(" show", "");
    }
}
</script>