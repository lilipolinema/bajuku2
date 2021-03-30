<!DOCTYPE html>
<html>
<head>
<title>Lacak Pesanan</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //tags -->
<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url();?>/assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
			<li class=" menu__item">
						<a class="menu__link" href="bantuan">Kembali</a>
					</li>
			</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->

<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Cari disini..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.html"><span>B</span>ajuku <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
			</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="col-md-8 modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Masuk <span>Sekarang</span></h3>
					<form action="<?php echo base_url()?>index.php/guest/login" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="username" required="">
							<label>Username</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="password" name="password" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<input type="submit" value="Masuk">
					</form>
					<div class="clearfix"></div>
					<p><a href="#" data-toggle="modal" data-target="#register" > Belum memiliki akun?</a></p>
				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<img src="<?php echo base_url();?>/assets/images/log_pic.jpg" alt=" "/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal Login -->
<!-- Modal Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="col-md-8 modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
					<form action="#" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Name</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="password" required=""> 
							<label>Password</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="password" name="Confirm Password" required=""> 
							<label>Confirm Password</label>
							<span></span>
						</div> 
						<input type="submit" value="Sign Up">
					</form>
					<div class="clearfix"></div>
					<p><a href="#">By clicking register, I agree to your terms</a></p>
				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<img src="images/log_pic.jpg" alt=" "/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal register -->

<!--/single_page-->
<!-- /banner_bottom_agile_info -->
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">Lacak <span>Pesanan</span></h3>	
		<div class='o-layout__item u-3of4'>
<div class='c-page-content js-page-content'>
<p align="justify">Berikut langkah melacak pesanan:</p>
				<div class="clearfix"></div>	
	
			<!-- /new_arrivals --> 
			<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
					<!--/tab_one-->
					   <div class="tab1">
							<div class="single_page_agile_its_w3ls">
							   <p>1.Login dengan menggunakan akun Anda di PC/Laptop</p>
							   <p class="w3ls_para">2. Masuk ke menu Pesanan Saya, maka akan tertera status terkini pesanan Anda</p>
							   <p class="w3ls_para">3. Untuk melihat detailnya, klik Nomor Pesanan</p>
							   <p class="w3ls_para">3. Akan tertera nama jasa dan nomor resi pengiriman</p>
							</div>
						</div>
						<!--//tab_one-->
						 <hr>
						 <p class='js-feedback'>Apakah artikel ini membantu?
						 	<strong>
						 		<a class='js-feedback-link' data-answer='helpful' data-id='4006' href='vote?vote=helpful'>Ya</a> atau
						 		<a class='js-feedback-link' data-answer='useless' data-id='4006' href='vote?vote=useless'>Tidak</a>
						 	</strong>
						 </p>
						</div>
					</div>
				</div>	
			</div>
		
    </div>
</div>
 </div>
<!--//single_page-->
<!-- footer -->

<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><span>B</span>ajuku </a></h2>
		</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Our <span>Information</span> </h4>
					<ul>
						<li><a href="<?php echo base_url()?>index.php/guest/">Home</a></li>
						<li><a href="<?php echo base_url()?>index.php/guest/pria">Pria</a></li>
						<li><a href="<?php echo base_url()?>index.php/guest/wanita">Wanita</a></li>
						<li><a href="#">Tentang</a></li>
						<li><a href="#">Kontak</a></li>
						<li><a href="<?php echo base_url()?>index.php/user/home/bantuan">Bantuan</a></li>
					</ul>
				</div>
				<div class="col-md-5 sign-gd-two">
					<h4>Store <span>Information</span></h4>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Nomor Telepon</h6>
								<p>+6289 8158 9211</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email</h6>
								<p><a href="mailto:customer_service@bajuku.com">customer_service@bajuku.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Lokasi</h6>
								<p>Malang, Jawa Timur, Indonesia</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2020 Bajuku. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- js -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="<?php echo base_url();?>/assets/js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="<?php echo base_url();?>/assets/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
	<!-- single -->
<script src="<?php echo base_url();?>/assets/js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->						
<script src="<?php echo base_url();?>/assets/js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- FlexSlider -->
<script src="<?php echo base_url();?>/assets/js/jquery.flexslider.js"></script>
<script>
// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>
<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
	/*
	var defaults = {
	containerID: 'toTop', // fading element id
	containerHoverID: 'toTopHover', // fading element hover id
	scrollSpeed: 1200,
	easingType: 'linear' 
	};
	*/
								
	$().UItoTop({ easingType: 'easeOutQuart' });
							
	});
</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
</body>
</html>
