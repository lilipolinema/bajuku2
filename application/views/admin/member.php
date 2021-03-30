<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
								</ol>
							</nav>
						</div>

					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-blue">Data Member</h5><br>
							<?php if ($this->session->flashdata('flash-data')): ?>
						        <div class="row mt-12">
						            <div class="col-md-12">
						                <div class="alert alert-success alert-dismissible fade show" role="alert">
						                Data Member <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
						                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						                    <span aria-hidden="true">&times;</span>
						                </button>
						            	</div>
						        	</div>
						    	</div>
						    <?php endif; ?>
							<p class="font-14"> <a class="btn btn-primary" href="<?php echo base_url();?>index.php/admin/tambahmember">Tambah Data Baru</a></p>
						</div>
					</div>
					<div class="row">
						<table class="table table-striped table-bordered" id="member">
							<thead>
								<tr>

									<th>Username</th>
									<th>Nama</th>
									<th>Email</th>
									<th>No Telepon</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
					                foreach($member as $m){?>
					                    <tr>
					                        <td class="table-plus"><?= $m['username']; ?></td>
					                        <td><?= $m['nama_lengkap']; ?></td>
					                        <td><?= $m['email']; ?></td>
					                        <td><?= $m['no_telepon']; ?></td>
					                        <td>
												<div class="dropdown">
													<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
														<i class="fa fa-ellipsis-h"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<!--<a class="dropdown-item" disabled href="<?= base_url();?>index.php/admin/editmember/<?= $m['id_user'];?>"><i class="fa fa-pencil"></i> Edit</a>-->
														<a class="dropdown-item" href="<?= base_url();?>index.php/admin/hapusmember/<?= $m['id_user'];?>"><i class="fa fa-trash"></i> Delete</a>
													</div>
												</div>
											</td>
					                    </tr>
					            <?php } ?>
							</tbody>
						</table>
					</div>
				</div>

				<!-- Simple Datatable End -->

			</div>

		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
		  	$('#member').DataTable();
		});
	</script>
</body>
</html>