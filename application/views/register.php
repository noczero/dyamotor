
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Concept - Bootstrap 4 Admin Dashboard Template</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link href="<?php echo base_url('assets/vendor/fonts/circular-std/style.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/libs/css/style.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')?>">
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
		}
	</style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->
<div class="splash-container">
	<div class="card">
		<div class="card-header">
			<h3 class="mb-1">Registrations Form</h3>
			<p>Please enter your user information.</p>
		</div>
		<div class="card-body">
			<?= form_open(); ?>
			<div class="form-group">
				<input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
			</div>
			<div class="form-group">
				<input class="form-control form-control-lg" name="password" id="password" type="password" required="" placeholder="Password">
			</div>
			<div class="form-group">
				<input class="form-control form-control-lg" name="confirm_pass" type="password" required="" placeholder="Confirm">
			</div>
			<div class="form-group pt-2">
				<button class="btn btn-block btn-primary" type="submit">Register My Account</button>
			</div>
			<?= form_close(); ?>
		<div class="card-footer bg-white">
			<p>Already member? <a href="<?php echo base_url()?>" class="text-secondary">Login Here.</a></p>
		</div>
	</div>
</div>
</body>


</html>
