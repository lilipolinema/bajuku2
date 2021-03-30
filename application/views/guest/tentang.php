<!DOCTYPE html>
<html>
<head>
<title>Bajuku | Tentang</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>/assets/css/font-awesome.css" rel="stylesheet"> 
<link href="<?php echo base_url();?>/assets/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#login"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Masuk </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#register"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Daftar </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Telepon : +6289 8158 9211</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:customer_service@bajuku.com">customer_service@bajuku.com</a></li>
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
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/">Home</a>
					</li>
					<li class="active menu__item menu__item--current">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/tentang">Tentang<span class="sr-only">(current)</span></a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/pria" >Pria</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/wanita" >Wanita</a>
					</li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="top_nav_right">
			<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
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
					<h3 class="agileinfo_sign">Daftar <span>Sekarang</span></h3>
					<form action="<?php echo base_url()?>index.php/guest/daftar" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="nama" required="">
							<label>Nama</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="username" required=""> 
							<label>Username</label>
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
						<div class="styled-input">
							<input type="email" name="email" required=""> 
							<label>Email</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="text" name="no_telepon" required=""> 
							<label>Nomor Telepon</label>
							<span></span>
						</div>
						<input type="submit" value="Daftar">
					</form>
					<div class="clearfix"></div>
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
<!-- //Modal register -->

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Tentang <span>Kita </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Tentang</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>
<!-- /banner_bottom_agile_info -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
			<div class="agile_ab_w3ls_info">
				<div class="col-md-6 ab_pic_w3ls">
				   	<img src="<?php echo base_url();?>/assets/images/ab_pic.jpg" alt=" " class="img-responsive" />
				</div>
				 <div class="col-md-6 ab_pic_w3ls_text_info">
				    <h5>About Our Bajuku.com</h5>
					<p>Bajuku.com is an online shopping center for men and women. This website is designed easily so that buyers can choose and buy clothes comfortably..</p>
					<p>Bajuku.com is an online store that sells clothes and pants for men and women of course by prioritizing good quality materials and current trends.</p>
				</div>
				  <div class="clearfix"></div>
			</div>    
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?php echo base_url();?>/assets/images/bottom1.jpg" alt=" " class="img-responsive" />			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="<?php echo base_url();?>/assets/images/bottom2.jpg" alt=" " class="img-responsive" />			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- team -->

<!-- //team -->

 <!-- //new_arrivals -->
<div class="coupons">
		<div class="coupons-grids text-center">
			<div class="w3layouts_mail_grid">
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Jaminan Pengiriman</h3>
						<p>Kami akan mengembalikan uang Anda secara penuh, jika barang tidak terkirim</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>24/7 SUPPORT</h3>
						<p>Pertanyaan akan ditanggapi dalam waktu 24 jam</p>
					</div>
				</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fas fa-money-bill-wave"
						 aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Pembayaran Aman</h3>
						<p>Kami menghadirkan pilihan metode pembayaran yang aman dan bervariasi</p>
					</div>
				</div>
					<div class="col-md-3 w3layouts_mail_grid_left">
					<div class="w3layouts_mail_grid_left1 hvr-radial-out">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="w3layouts_mail_grid_left2">
						<h3>Voucher Diskon</h3>
						<p>Kami menyediakan banyak voucher dan diskon untuk para konsumen</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
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
<script src="<?php echo base_url();?>/assets/js/responsiveslides.min.js"></script>
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
	<!---->
<script type='text/javascript'>//<![CDATA[ 
	$(window).load(function(){
		$( "#slider-range" ).slider({
			range: true,
			min: 0,
			max: 9000,
			values: [ 1000, 7000 ],
			slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );}
		});
		$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	});//]]>
</script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery-ui.js"></script>
					 <!---->
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
