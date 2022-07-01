<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login PPDB Online</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm')?>" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
	<link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head>

<body>
	<div class="box" style="width: 720px; text-align: center;">
		<?php if (session()->getFlashdata('msg')) : ?>
			<div class="alert alert-danger">
				<?= session()->getFlashdata('msg') ?>
			</div>
		<?php endif; ?>
		<?php
		if (!empty(session()->getFlashdata('success'))) { ?>

			<div class="alert alert-success">
				<?php echo session()->getFlashdata('success'); ?>
			</div>

		<?php } ?>
		<?php if (!empty(session()->getFlashdata('info'))) { ?>

			<div class="alert alert-info">
				<?php echo session()->getFlashdata('info'); ?>
			</div>

		<?php } ?>

		<?php if (!empty(session()->getFlashdata('warning'))) { ?>

			<div class="alert alert-warning">
				<?php echo session()->getFlashdata('warning'); ?>
			</div>

		<?php } ?>
		<?php if (!empty(session()->getFlashdata('danger'))) { ?>

			<div class="alert alert-danger">
				<?php echo session()->getFlashdata('danger'); ?>
			</div>

		<?php } ?>
	</div>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="<?= base_url('Home/save_account'); ?>" method="POST">
				<h1>Create Account</h1>
				<br>
				<input name="nama" type="text" placeholder="Name" required />
				<input name="email" type="email" placeholder="Email" required />
				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class='pesan' style="color: red;">
						<?= $error = $validation->getError('email'); ?>
					</div>
				<?php endif; ?>
				<input name="password" type="password" placeholder="Password" required />
				<?php if (!empty(session()->getFlashdata('error'))) : ?>
					<div class='pesan' style="color: red;">
						<?= $error = $validation->getError('password'); ?>
					</div>
				<?php endif; ?>
				<br>
				<button type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="<?= base_url('Home/loginAuth') ?>" method="POST">
				<h1>Sign in</h1>
				<br>
				<input type="email" name="email" placeholder="Email" autofocus />
				<input type="password" name="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<img src="<?php echo base_url('img/ppdb_logo.png') ?>">
					<br>
					<h5><b>SMA Negeri 1 Suzuran</b></h5>
					<p>Sudah punya akun? <br> Silahkan masuk</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<img src="<?php echo base_url('img/ppdb_logo.png') ?>">
					<br>
					<h5><b>SMA Negeri 1 Suzuran</b></h5>
					<p>Belum punya akun? <br> Silahkan lakukan pendaftaran</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<footer>
	</footer>
	<script src="<?= base_url('js/min.js') ?>"></script>

</html>