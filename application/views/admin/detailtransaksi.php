<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #F0F5F7">
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Transaksi</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Transaksi</li>
									<li class="breadcrumb-item active" aria-current="page">Detail Data Transaksi</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Transaksi <?= $transaksi['id_transaksi']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID Transaksi</th>
										<td>:</td>
										<td><?= $transaksi['id_transaksi']; ?></td>
									</tr>
									<tr>
										<th>ID Pemesanan</th>
										<td>:</td>
										<td><?= $transaksi['id_pemesanan']; ?></td>
									</tr>
									<tr>
										<th>Status Bayar</th>
										<td>:</td>
										<td><?= $transaksi['status_bayar']; ?></td>
									</tr>
									<tr>
										<th>Status Pengiriman</th>
										<td>:</td>
										<td><?= $transaksi['status_pengiriman']; ?></td>
									</tr>
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/transaksi">Kembali</a></p></td>
									</tr>
								</tbody>
							</table>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>