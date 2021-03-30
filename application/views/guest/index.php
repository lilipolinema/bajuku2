<!DOCTYPE html>
<html>
<head>
<title>Bajuku | Home</title>
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
					<li class="active menu__item menu__item--current">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class=" menu__item">
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/tentang">Tentang</a>
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

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Summer <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 
	<!-- //banner -->

<!-- /new_arrivals --> 
<div class="new_arrivals_agile_w3ls_info"> 
	<div class="container">
	    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
		<div id="horizontalTab">
			<ul class="resp-tabs-list">
				<li> Pria </li>
				<li> Wanita </li>
			</ul>
		<div class="resp-tabs-container">
			<!--/tab_pria-->
			<div class="tab1">
				<?php
					foreach ($produkPria as $p) { 
				?>
				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src='<?php echo base_url("assets/images/".$p->gambar_produk);?>' alt="" class="pro-image-front">
							<img src='<?php echo base_url("assets/images/".$p->gambar_produk);?>' alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="<?php echo base_url()."index.php/guest/detail_produk/". $p->id_produk; ?>" class="link-product-add-cart">Lihat Produk</a>
									</div>
								</div>
							<span class="product-new-top">Baru</span>										
						</div>
						<div class="item-info-product ">
							<h4><a href="<?php echo base_url()."index.php/guest/detail_produk/". $p->id_produk; ?>"><?php echo $p->nama_produk;?></a></h4>
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
			</div>
			<!--//tab_pria-->

			<!--/tab_wanita-->
			<div class="tab2">
				<?php
					foreach ($produkWanita as $w) { 
				?>
				<div class="col-md-3 product-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src='<?php echo base_url("assets/images/".$w->gambar_produk);?>' alt="" class="pro-image-front">
							<img src='<?php echo base_url("assets/images/".$w->gambar_produk);?>' alt="" class="pro-image-back">
								<div class="men-cart-pro">
									<div class="inner-men-cart-pro">
										<a href="<?php echo base_url()."index.php/guest/detail_produk/". $w->id_produk; ?>" class="link-product-add-cart">Lihat Produk</a>
									</div>
								</div>
							<span class="product-new-top">Baru</span>										
						</div>
						<div class="item-info-product ">
							<h4><a href="<?php echo base_url()."index.php/guest/detail_produk/". $w->id_produk; ?>"><?php echo $w->nama_produk;?></a></h4>
							<div class="info-product-price">
								<span class="item_price">Rp. <?php echo $w->harga_produk;?></span>
							</div>
							<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
								<form action="#" method="post">
									<fieldset>
										<input type="hidden" name="cmd" value="_cart" />
										<input type="hidden" name="add" value="1" />
										<input type="hidden" name="business" value=" " />
										<input type="hidden" name="item_name" value="<?php echo $w->nama_produk;?>" />
										<input type="hidden" name="amount" value="<?php echo $w->harga_produk;?>" />
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
			</div>
			<!--//tab wanita-->
		</div>
		</div>
	</div>
</div>
<!-- //new_arrivals -->

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
						<li><a href="<?php echo base_url()?>index.php/guest/tentang">Tentang</a></li>
						<li><a href="<?php echo base_url()?>index.php/guest/bantuan">Bantuan</a></li>
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
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="<?php echo base_url();?>/assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
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