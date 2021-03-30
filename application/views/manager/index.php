<!DOCTYPE html>
<html>
<head>
</head>
<body class="body-login">
	<?=
	form_open('manager/proses_login');
	?>

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="<?php echo base_url();?>/assets/admin/vendors/images/login-img.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>
			<form>
				<div class="input-group custom input-group-lg">
					<input type="text" name="username" id="username" class="form-control" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name="password" id="password" class="form-control" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
						<button class="btn btn-outline-primary btn-lg btn-block">Sign In</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?= form_close(); ?>
</body>
</html>