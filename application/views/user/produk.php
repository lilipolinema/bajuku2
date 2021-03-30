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
					<li>Detail Produk	</li>
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
						<li data-thumb='<?php echo base_url('assets/images/'.$d->gambar_produk);?>'>
							<div class="thumb-image"> <img src="<?php echo base_url('assets/images/'.$d->gambar_produk);?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
			<h3><?php echo $d->nama_produk;?></h3>
			<p><span class="item_price"><?php echo $d->harga_produk;?></span></p>
			<div class="rating1">
				<span class="starRating">
					<input id="rating5" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3" checked="">
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
			</div>
			<div class="color-quality">
				<div class="color-quality-right">
					<h5>Jumlah Pembelian</h5>
					<form action="<?php echo base_url()?>index.php/user/transaksi/index" method="post">
					<select name="jumlah" class="frm-field required sect">
						<option value="1">1</option>
						<option value="2">2 </option> 
						<option value="3">3</option>					
						<option value="4">4</option>
						<option value="5">5</option>								
					</select>
				</div>
			</div>
			<div class="occasional">
				<h5>Ukuran</h5>
				<div class="colr">
					<label class="radio"><input type="radio" name="ukuran" value="S"><i></i>S</label>
				</div>
				<div class="colr">
					<label class="radio"><input type="radio" name="ukuran" value="M" checked=""><i></i>M</label>
				</div>
				<div class="colr">
					<label class="radio"><input type="radio" name="ukuran" value="L"><i></i>L</label>
				</div>
				<div class="colr">
					<label class="radio"><input type="radio" name="ukuran" value="XL"><i></i>XL</label>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="occasion-cart">
				<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
					<input type="text" name="id" value="<?php echo $d->id_produk;?>" hidden>
					<input type="submit" class="button" value="Beli Sekarang">
					</form>
				</div>																			
			</div>					
		</div>
		
	 	<div class="clearfix"> </div>
	
			<!-- /new_arrivals --> 
			<div class="responsive_tabs_agileits"> 
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li>Deskripsi</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
					   <div class="tab1">
							<div class="single_page_agile_its_w3ls">
							  <h6>Deskripsi Produk</h6>
							   <p>Nama Produk : <?php echo $d->nama_produk;?></p>
							   <p class="w3ls_para">Ukuran Tersedia : <?php echo $d->ukuran_produk;?></p>
							   <p class="w3ls_para">Jenis Kain : <?php echo $d->jenis_kain;?></p>
							   <p class="w3ls_para"><b>*Produk ini khusus untuk <?php echo $d->kategori_produk;?></b></p>
							</div>
						</div>
						<!--//tab_one-->
						</div>
					</div>
				</div>	
			</div>
			<?php } ?>
		<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Featured <span>Arrivals</span></h3>
			<?php
				foreach ($produk as $p) { 
			?>
			<div class="col-md-3 product-men">
				<div class="men-pro-item simpleCart_shelfItem">
					<div class="men-thumb-item">
						<img src="<?php echo base_url('assets/images/'.$p->gambar_produk);?>" alt="" class="pro-image-front">
						<img src="<?php echo base_url('assets/images/'.$p->gambar_produk);?>" alt="" class="pro-image-back">
						<div class="men-cart-pro">
							<div class="inner-men-cart-pro">
								<a href="<?php echo base_url()."index.php/user/home/detail_produk/". $p->id_produk; ?>" class="link-product-add-cart">Lihat Produk</a>
							</div>
						</div>										
					</div>
					<div class="item-info-product ">
						<h4><a href="<?php echo base_url()."index.php/user/home/detail_produk/". $p->id_produk; ?>"><?php echo $p->nama_produk;?></a></h4>
						<div class="info-product-price">
							<span class="item_price">Rp. <?php echo $p->harga_produk;?></span>
						</div>
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
							<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="<?php echo $p->nama_produk;?>" />
									<input type="hidden" name="amount" value="<?php echo $p->harga_produk;?>" />
									<input type="hidden" name="currency_code" value="IDR" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Tambah ke Keranjang" class="button" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
			<!--//slider_owl-->
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