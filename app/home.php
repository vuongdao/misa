<?php
require("templates/header.php");
?>
<section class="content">
	<div class="row panel hide-small hide-medium" id="banner-large">
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
	<div class="display-container">
		<img class="mySlides" src="../public/images/banners/s1.jpg" style="width:100%">
		<img class="mySlides" src="../public/images/banners/s2.jpg" style="width:100%">
		<img class="mySlides" src="../public/images/banners/s3.jpg" style="width:100%">
		<img class="mySlides" src="../public/images/banners/s4.jpg" style="width:100%">
		<img class="mySlides" src="../public/images/banners/s5.jpg" style="width:100%">

		<div class="center section large text-white display-bottommiddle" style="width:100%;bottom:-10px;">
	    <div class="left padding-left hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
	    <div class="right padding-right hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
	    <span class="badge demo border transparent hover-white" onclick="currentDiv(1)" style="width:10px;height:10px;padding:0;"> </span>
	    <span class="badge demo border transparent hover-white" onclick="currentDiv(2)" style="width:10px;height:10px;padding:0;"></span>
	    <span class="badge demo border transparent hover-white" onclick="currentDiv(3)" style="width:10px;height:10px;padding:0;"></span>
	    <span class="badge demo border transparent hover-white" onclick="currentDiv(4)" style="width:10px;height:10px;padding:0;"></span>
	    <span class="badge demo border transparent hover-white" onclick="currentDiv(5)" style="width:10px;height:10px;padding:0;"></span>
	  </div>
	</div>
	
</section>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " white";
}
</script>