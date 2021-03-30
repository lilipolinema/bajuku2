	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url();?>manager/home">
				<img src="<?php echo base_url();?>assets/admin/src/images/logo_Admin.png" alt="" class="mobile-logo" width = 150 height = 100>
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="<?php echo base_url();?>manager/home" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-group"></span><span class="mtext">Laporan</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>index.php/manager/produk">Laporan Produk</a></li>
							<li><a href="<?php echo base_url();?>index.php/manager/pemesanan">Laporan Pemesanan</a></li>
						</ul>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>