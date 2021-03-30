<!DOCTYPE html>
<html>
<head>
<title>Bajuku | Bantuan</title>
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
			<li class=" menu__item">
						<a class="menu__link" href="index">Kembali</a>
					</li>
					<div class="top_nav_right">
		    </ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Cari topik bantuan..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.html"><span>B</span>ajukuBantuan <i class="fa fa-shopping-bag top_logo_agile_bag" aria-hidden="true"></i></a></h1>
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
						<a class="menu__link" href="<?php echo base_url()?>index.php/guest/">Bantuan <span class="sr-only">(current)</span></a>
					</li>
					
				  </ul>
				</div>
			  </div>
			</nav>	
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
		<h3><span>Hai, apa yang bisa kami bantu?</span></h3>
		<!--/w3_short-->
		 <div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">
				<ul class="w3_short">
					<li><a href="index.html">Bajuku</a><i>|</i></li>
					<li>Bantuan</li>
				</ul>
			</div>
		</div>
		<!--//w3_short-->
	</div>
</div>

<!-- /new_arrivals --> 
  <div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">PALING  <span>SERING DITANYAKAN</span></h3>	
		<div class='o-layout__item u-3of4'>
 
    <section class="section knowledge-base">
    <section class="categories blocks">
      <ul class="blocks-list">
			<li class="blocks-item">	
            <a href="cekstatus" class="blocks-item-link">
              <h4 class="blocks-item-title">Cara Cek Status Order</h4>
            </a>
          </li>
        <br>
          <li class="blocks-item">
            <a href="konfirmasiP" class="blocks-item-link">
              <h4 class="blocks-item-title">Konfirmasi Pembayaran Bank Transfer</h4>
            </a>
          </li>
        <br>
          <li class="blocks-item">
            <a href="batal_pesanan" class="blocks-item-link">
              <h4 class="blocks-item-title">Pembatalan Pesanan</h4>
            </a>
          </li>
        	<br>
        	<li class="blocks-item">
            <a href="lacak" class="blocks-item-link">
              <h4 class="blocks-item-title"> Lacak Pesanan</h4>
            </a>
          </li>
      </ul>
      
    </section>
  </section>

  <div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">PERTANYAAN  <span>LAINNYA</span></h3>	
		<div class='o-layout__item u-3of4'>
  
  <section class="section knowledge-base">
    <section class="categories blocks">
      <ul class="blocks-list">
          <br>
            <li class="blocks-item">
              <a href='pembayaran' class="blocks-item-link">
                <h4 class="blocks-item-title">Pembayaran</h4>
                <p class="blocks-item-description"></p>
              </a>
            </li>
          <br>
            <li class="blocks-item">
              <a href='cs' class="blocks-item-link">
                <h4 class="blocks-item-title">Hubungi Kami</h4>
                <p class="blocks-item-description"></p>
              </a>
            </li>
          
      </ul>
      
    </section>
<!-- footer -->
<hr>
<p class='js-feedback'>BANTUAN

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