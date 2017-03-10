<?php
require("templates/header_product.php");
?>
<div id="breadcrunb" class="light-grey">
	<div class="content padding text-grey">
		<span><a href="#">TRANG CHỦ</a></span>	/
		<span class="padding-tiny"><a href="#">SỨC KHỎE SẮC ĐẸP</a></span> /
		<span class="padding-tiny"><a href="#">CHĂM SÓC DA</a></span> /
		<span class="padding-tiny"><a href="#">Sữa Dưỡng Thể Trắng Da Vaseline Healthy White Lightening 725ml</a></span>
	</div>
</div>
<section class="content">
	<div class="section">
		<div class="row-padding">
			<div class="threequarter">
				<div class="half">
					<div id="product-gallery">
						<div id="gal_01" class="col" style="width:70px;">
							 <a href="#" data-image="../public/images/product1.jpg" data-zoom-image="../public/images/product1.jpg">
							  <img id="img_01" src="../public/images/product1.jpg" style="width: 70px;">
							  </a>
							  <a href="#" data-image="../public/images/product2.jpg" data-zoom-image="../public/images/product2.jpg">
							    <img id="img_01" src="../public/images/product2.jpg" style="width: 70px;">
							  </a>
							  <a href="#" data-image="../public/images/product3.jpg" data-zoom-image="../public/images/product3.jpg">
							    <img id="img_01" src="../public/images/product3.jpg" style="width: 70px;">
							  </a>
							  <a href="#" data-image="../public/images/product4.jpg" data-zoom-image="../public/images/product4.jpg">
							    <img id="img_01" src="../public/images/product4.jpg" style="width: 70px;">
							  </a>
							  <a href="#" data-image="../public/images/product4.jpg" data-zoom-image="../public/images/product4.jpg">
							    <img id="img_01" src="../public/images/product4.jpg" style="width: 70px;">
							  </a>
						</div>
						<div class="stage rest" style="width:350px;">
							<img id="zoom_03" src="../public/images/product3.jpg" data-zoom-image="../public/images/product3.jpg" alt="" class="image">
						</div>
					</div>
				</div>
				<div class="half">
					<h1 class="large margin-0">Nước hoa nam Deep Sea Jeanne D'urfe Paris 50ml</h1>
					<p><span class="text-grey">Thương hiệu: </span><a href="#" class="text-blue hover-opacity">Gucci</a></p>
					<p>Nước hoa mini cho nam Versace Eros Eau De Toilette với hương thơm mạnh mẽ, cá tính nhưng ẩn giấu dư vị nống ấm, quyến luyến dụ hoặc.</p>
					<hr>
					<p><span class="text-red large">220,000đ </span><span class="text-grey"><del>150,000đ</del></span></p>
					<p><span class="text-grey">Mã sản phẩm: </span>MS000587.</p>
					<p><span class="text-grey">Tình trạng: </span>Còn hàng.</p>
					<p>Thời gian và phí giao hàng được ước tính sau khi đặt hàng. Xem <a href="#" class="text-blue"> chính sách giao hàng.</a></p>
					<div class="bar large"><button class="btn red padding-large"><i class="fa fa-shopping-cart"></i></button><a href="" class="btn red padding-large">Mua hàng ngay</a></div>
				</div>
				<div class="product-content col">
					<h2>Thông tin sản phẩm</h2>
				</div>
			</div>
			<div class="quarter">
				<div class="light-grey padding">
				
					<i class="fa fa-truck fa-2x left margin-right"></i><p>Giao hàng toàn quốc.</p>
					<i class="fa fa-refresh fa-2x left margin-right"></i><p>Đổi trả hàng trong vòng 3 ngày.</p>
					<i class="fa fa-id-card-o fa-2x left margin-right"></i><p>Nhận hàng và thanh toán tại nhà.</p>
				
				</div>
			</div>
		</div>
	</div>
</section>
<script>
$("#zoom_03").elevateZoom({constrainType:"height", constrainSize:400, zoomType: "lens", containLensZoom: true, gallery:'gal_01', cursor: 'crosshair', galleryActiveClass: "active"}); 

//pass the images to Fancybox
$("#zoom_03").bind("click", function(e) {  
  var ez =   $('#zoom_03').data('elevateZoom');	
	$.fancybox(ez.getGalleryList());
  return false;
});
</script>