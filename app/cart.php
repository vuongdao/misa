<?php
require("templates/header.php");
?>
<section class="content">
	<div class="panel"><a href="#" class="large text-blue hover-opacity"><i class="fa fa-angle-left"></i> Mua thêm sản phẩm khác</a></div>
	<div class="row section">
		<div class="twothird container">
			<h2 class="large light-gray margin-0 padding">Giỏ hàng của bạn</h2>
			<div class="white">
				<div class="row border-bottom border-light-grey">
					<div class="col padding-12 padding-left" style="width: 85px;">
						<img src="../public/images/product1.jpg" alt="" class="image">
						<a href="#" class="padding">x xóa</a>
					</div>
					<div class="rest container">
						<div class="row">
							<div class="col s6"><a href="#"><p>Áo Sơ Mi Nam Ngắn Tay SoYoung MEN SO MI 010 T</p></a></div>
							<div class="col s6"><p class="right medium text-red"><strong>400,000đ</strong></p></div>
						</div>
						<div class="col">
							<div class="col s6"><p class="left text-red">200,000đ</p></div>
							<div class="col s6"><p class="right"><input type="number" class="border center" value="2" style="width: 75px;"></p></div>
						</div>
					</div>
				</div>
				
				<div class="row border-bottom border-light-grey">
					<div class="col padding-12 padding-left" style="width: 85px;">
						<img src="../public/images/product1.jpg" alt="" class="image">
						<a href="#" class="padding">x xóa</a>
					</div>
					<div class="rest container">
						<div class="row">
							<div class="col s6"><a href="#"><p>Áo Sơ Mi Nam Ngắn Tay SoYoung MEN SO MI 010 T</p></a></div>
							<div class="col s6"><p class="right medium text-red"><strong>200,000đ</strong></p></div>
						</div>
						<div class="col">
							<div class="col s6"><p class="left text-red">200,000đ</p></div>
							<div class="col s6"><p class="right"><input type="number" class="border center" value="1" style="width: 75px;"></p></div>
						</div>
					</div>
				</div>
				
				<div class="container white padding-12">
					<h4 class="left "><b>Tổng tiền:</b></h4>
					<h4 class="right  text-red"><b>600,000đ</b></h4>
				</div>
			</div>
		</div>
		<div class="third container">
			<h2 class="large light-gray margin-0 padding">Thông tin thanh toán</h2>
			<div class="white">
				<div class="container">
					<form action="">
						<p><input type="text" class="border input" placeholder="Họ và tên"></p>
						<p><input type="text" class="border input" placeholder="Số điện thoại"></p>
						<p><select name="" id="" class="input border white">
							<option value="">-- Chọn Tỉnh/Thành phố --</option>
						</select></p>
						<p><input type="text" class="border input" placeholder="Số nhà, tên đường, phường / xã, quận / huyện"></p>
						<p><textarea name="" id="" rows="5" class="input border" placeholder="Yêu cầu khác (không bắt buộc)"></textarea></p>
						<p><button class="btn-block padding-12 red ripple" type="submit" name="ok">Thanh toán</button></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>