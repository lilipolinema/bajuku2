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
								<h4>Member</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/admin/dashboard">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Data Member</li>
									<li class="breadcrumb-item active" aria-current="page">Edit Data Member</li>
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h4 class="text-primary">Form Edit Data Member</h4><br>
							<p class="font-14"> <a class="btn btn-danger" href="<?php echo base_url();?>index.php/admin/member">Kembali</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<?php if (validation_errors()):?> 
			                    <div class="alert alert-danger" role="alert">
			                        <?= validation_errors(); ?>
			                    </div>
                			<?php endif ?>
							<form action = "" method = "post">
							<table class="table table-bordered" id="member" width="80%" align="center">
								<tbody>
									<tr>
										<th>ID</th>
										<td>:</td>
										<td><input type="text" name="id_user" id="id_user" class="form-control" value="<?= $member['id_user']; ?>" disabled></td>
									</tr>
									<tr>
										<th>Username</th>
										<td>:</td>
										<td><input type="text" name="username" id="username" class="form-control" value="<?= $member['username']; ?>"></td>
									</tr>
									<tr>
										<th>Password</th>
										<td>:</td>
										<td><input type="password" name="password" id="password" class="form-control"value="<?= $member['password']; ?>" disabled></td>
									</tr>
									<tr>
										<th>Nama</th>
										<td>:</td>
										<td><input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $member['nama_lengkap']; ?>"></td>
									</tr>
									<tr>
										<th>Email</th>
										<td>:</td>
										<td><input type="email" name="email" id="email" class="form-control" value="<?= $member['email']; ?>"></td>
									</tr>
									<tr>
										<th>No Telepon</th>
										<td>:</td>
										<td><input type="text" name="no_telepon" id="no_telepon" class="form-control" value="<?= $member['no_telepon']; ?>"></td>
									</tr>
									<tr>
										<td colspan="3"><button type = "submit" name = "submit" class = "btn btn-primary float-right"> Edit </button></td>
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