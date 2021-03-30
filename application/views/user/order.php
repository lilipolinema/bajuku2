<!DOCTYPE html>
<html>
<head>
<title>Bajuku | Detail Produk</title>
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
				<h1><a href="<?php echo base_url()?>index.php/user/home/"><span>B</span>ajuku <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
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
						<a class="menu__link" href="<?php echo base_url()?>index.php/user/home/">Home</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/user/home/tentang">Tentang</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/user/home/pria">Pria</a>
					</li>
					<li class="menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/user/home/wanita">Wanita</a>
					</li>
					<li class="menu__item dropdown">
					   	<a class="menu__link" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata("nama_lengkap");?> <b class="caret"></b></a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li><a href="<?php echo base_url()?>index.php/user/home/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Keluar</a></li>
						</ul>
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

<!--/single_page-->
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
	<div class="container">
		<h3>Detail <span>Produk </span></h3>
		<!--/w3_short-->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">
				<ul class="w3_short">
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Pesan Produk</li>
				</ul>
			</div>
		</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
		<?php
			foreach ($dataProduk as $d) {
		?>
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb='<?php echo base_url("assets/images/".$d->gambar_produk);?>'>
							<div class="thumb-image"> <img src='<?php echo base_url("assets/images/".$d->gambar_produk);?>' data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left contact-form">
			<div class="styled-input agile-styled-input-top">
				<input type="text" value="<?php echo $d->nama_produk;?>">
				<label>Nama Produk</label>
				<span></span>
			</div>
			<div class="styled-input agile-styled-input-top">
				<input type="text" value="<?php echo $d->harga_produk;?>">
				<label>Harga Produk /Pcs</label>
				<span></span>
			</div>
			<form action="<?php echo base_url()?>index.php/user/transaksi/tambah_order" method="post">
			<div class="styled-input agile-styled-input-top">
				<input type="text" name="id_order" value="<?php foreach ($idPemesanan as $t) { $x= $t->id_pemesanan; $x++; echo $x; } ?>" hidden>
				<input type="text" name="id_user" value="<?php echo $this->session->userdata("user_id");?>" hidden>
				<input type="text" name="id_produk" value="<?php echo $d->id_produk;}?>" hidden>
				<input type="text" name="jumlah" value="<?php echo $_POST['jumlah'];?>">
				<label>Jumlah Pembelian</label>
				<span></span>
			</div>
			<div class="styled-input agile-styled-input-top">
				<input type="text"  name="ukuran" value="<?php echo $_POST['ukuran'];?>">
				<label>Ukuran</label>
				<span></span>
			</div>
			<div class="styled-input agile-styled-input-top">
				<textarea name="alamat"></textarea>
				<label>Alamat Pengiriman</label>
				<span></span>
			</div>
			<div class="styled-input agile-styled-input-top">
				<input type="radio"  name="metode" value="COD"><img src="<?php echo base_url()?>assets/images/cod.png" style="width: 70px">
				<input type="radio"  name="metode" value="BNI"><img src="<?php echo base_url()?>assets/images/bni.png" style="width: 70px">
				<input type="radio"  name="metode" value="BRI"><img src="<?php echo base_url()?>assets/images/bri.png" style="width: 70px">
				<input type="radio"  name="metode" value="BCA"><img src="<?php echo base_url()?>assets/images/bca.png" style="width: 70px">
				<input type="radio"  name="metode" value="MANDIRI"><img src="<?php echo base_url()?>assets/images/mandiri.png" style="width: 70px">
				<input type="radio"  name="metode" value="OVO"><img src="<?php echo base_url()?>assets/images/ovo.png" style="width: 70px">
				<label>Metode Bayar</label>
				<span></span>
			</div>
			<input type="submit" class="button" value="Beli Sekarang">
			</form>
		</div>																			
	</div>					
</div>
<div class="clearfix"> </div>

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
						<li><a href="<?php echo base_url()?>index.php/user/home/">Home</a></li>
						<li><a href="<?php echo base_url()?>index.php/user/home/pria">Pria</a></li>
						<li><a href="<?php echo base_url()?>index.php/user/home/wanita">Wanita</a></li>
						<li><a href="<?php echo base_url()?>index.php/user/home/tentang">Tentang</a></li>
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