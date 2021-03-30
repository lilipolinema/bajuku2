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
									<li class="breadcrumb-item active" aria-current="page">Tambah Data Produk</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Form Tambah Data Produk</h4><br>
							<p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/produk">Kembali</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php if (validation_errors()):?> 
			                    <div class="alert alert-danger" role="alert">
			                        <?= validation_errors(); ?>
			                    </div>
                			<?php endif ?>
							<form action = "" method = "post" enctype="multipart/form-data">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID Produk</th>
										<td>:</td>
										<td><input type="text" name="id_produk" id="id_produk" class="form-control"></td>
									</tr>
									<tr>
										<th>Nama Produk</th>
										<td>:</td>
										<td><input type="text" name="nama_produk" id="nama_produk" class="form-control"></td>
									</tr>
									<tr>
										<th>Harga Produk</th>
										<td>:</td>
										<td><input type="number" name="harga_produk" id="harga_produk" class="form-control"></td>
									</tr>
									<tr>
										<th>Ukuran Produk</th>
										<td>:</td>
										<td><input type="text" name="ukuran_produk" id="ukuran_produk" class="form-control"></td>
									</tr>
									<tr>
										<th>Jenis Kain</th>
										<td>:</td>
										<td><input type="text" name="jenis_kain" id="jenis_kain" class="form-control"></td>
									</tr>
									<tr>
										<th>Kategori Produk</th>
										<td>:</td>
										<td><input type="text" name="kategori_produk" id="no_telepon" class="form-control"></td>
									</tr>
									<tr>
										<th>Gambar Produk</th>
										<td>:</td>
										<td><input type="file" class="form-control" name="gambar_produk" id="gambar_produk"></td>
									</tr>
									<tr>
										<td colspan="3"><button type = "submit" name = "submit" class = "btn btn-primary float-right"> Tambah </button></td>
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