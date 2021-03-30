	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url();?>admin/dashboard">
				<img src="<?php echo base_url();?>assets/admin/src/images/logo_Admin.png" alt="" class="mobile-logo" width = 150 height = 100>
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="<?php echo base_url();?>index.php/admin/dashboard" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-group"></span><span class="mtext">Member</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>index.php/admin/member">Data Member</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-address-book-o"></span><span class="mtext">Pemesanan</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>index.php/admin/pemesanan">Data Pemesanan</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-book"></span><span class="mtext">Product</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>index.php/admin/produk">Data Product</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-line-chart"></span><span class="mtext">Transaksi</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>index.php/admin/transaksi">Data Transaksi</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>