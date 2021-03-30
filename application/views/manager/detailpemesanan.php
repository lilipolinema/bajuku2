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
								<h4>Pemesanan</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/manager/home">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Pemesanan</li>
									<li class="breadcrumb-item active" aria-current="page">Detail Data Pemesanan</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Pemesanan <?= $pemesanan['id_pemesanan']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID Pemesanan</th>
										<td>:</td>
										<td><?= $pemesanan['id_pemesanan']; ?></td>
									</tr>
									<tr>
										<th>Nama User</th>
										<td>:</td>
										<td><?= $pemesanan['nama_lengkap']; ?></td>
									</tr>
									<tr>
										<th>Nama Produk</th>
										<td>:</td>
										<td><?= $pemesanan['nama_produk']; ?></td>
									</tr>
									<tr>
										<th>Jumlah Beli</th>
										<td>:</td>
										<td><?= $pemesanan['jumlah_beli']; ?></td>
									</tr>
									<tr>
										<th>Total Bayar</th>
										<td>:</td>
										<td><?= $pemesanan['total_bayar']; ?></td>
									</tr>
									<tr>
										<th>Metode Pembayaran</th>
										<td>:</td>
										<td><?= $pemesanan['metode_bayar']; ?></td>
									</tr>
									<tr>
										<th>Alamat Pengirim</th>
										<td>:</td>
										<td><?= $pemesanan['alamat_kirim']; ?></td>
									</tr>
									<tr>
										<th>Kode Pembayaran</th>
										<td>:</td>
										<td><?= $pemesanan['kode_bayar']; ?></td>
									</tr>
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>index.php/manager/pemesanan">Kembali</a></p></td>
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