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
								<h4>Produk</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Produk</li>
									<li class="breadcrumb-item active" aria-current="page">Detail Data Produk</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Produk <?= $produk['nama_produk']; ?></h4><br>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<td colspan ="3" align="center">
											<img src="<?= base_url().'assets/images/'.$produk['gambar_produk']; ?>" width = 100 height = 400>
										</td>
									</tr>
									<tr>
										<th>ID Produk</th>
										<td>:</td>
										<td><?= $produk['id_produk']; ?></td>
									</tr>
									<tr>
										<th>Nama Produk</th>
										<td>:</td>
										<td><?= $produk['nama_produk']; ?></td>
									</tr>
									<tr>
										<th>Harga Produk</th>
										<td>:</td>
										<td><?= $produk['harga_produk']; ?></td>
									</tr>
									<tr>
										<th>Ukuran Produk</th>
										<td>:</td>
										<td><?= $produk['ukuran_produk']; ?></td>
									</tr>
									<tr>
										<th>Jenis Kain</th>
										<td>:</td>
										<td><?= $produk['jenis_kain']; ?></td>
									</tr>
									<tr>
										<th>Kategori Produk</th>
										<td>:</td>
										<td><?= $produk['kategori_produk']; ?></td>
									</tr>
									<tr>
										<td colspan ="3" align="center"><p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/produk">Kembali</a></p></td>
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