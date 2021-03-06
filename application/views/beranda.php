<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Halaman Beranda</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= base_url('assets') ?>/style.css">
	<style>
	nav ul a{
		color: white;
	}
	#gambar{
		height: 48vh;
	}
	</style>
</head>

<body>
	<nav class="red" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="https://www.wadahsukses.com" class="brand-logo"><img src="<?= base_url('assets') ?>/logo.png"
				 style="width: 11vh; height: 8vh"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/profil') ?>">Profil</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/gallery') ?>">Contact</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/event') ?>">Event</a></li>
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="<?= base_url('welcome/index') ?>">Home</a></li>
			</ul>

			<ul id="nav-mobile" class="sidenav">
				<li><a href="<?= base_url('welcome/profil') ?>">Profil</a></li>
				<li><a href="<?= base_url('welcome/contact') ?>">Contact</a></li>
				<li><a href="<?= base_url('welcome/event') ?>">Event</a></li>
				<li><a href="<?= base_url('welcome/index') ?>">Home</a></li>
			</ul>
			<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		</div>
	</nav>
	<h1 class="center">
		SELAMAT DATANG <span style="color: salmon;"><?= $nama_lengkap ?></span><br>
		Berperilakulah seperti <span style="color: salmon;"><?= $jenis_kelamin ?></span>
	</h1>

	<p style="font-size: 10px; margin-left: 56px; margin-top: 39px;" class="center">Lorem ipsum dolor sit amet, consectetur adipisicing
		elit. Delectus, quidem, impedit quia tempora aperiam voluptate culpa cum totam sed cupiditate laudantium voluptatem
		dolorum deserunt, exercitationem accusantium! Eaque dignissimos vel recusandae.</p>
	<div class="row">
		<div class="col s12 center">
			<img src="<?= base_url('assets') ?>/iyoh.JPG" id="gambar">
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="<?= base_url('assets') ?>/init.js"></script>
</body>

</html>
