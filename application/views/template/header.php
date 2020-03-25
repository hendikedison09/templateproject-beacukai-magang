<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">

	<link rel="stylesheet" href="../assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

	<link href="https://fonts.googleapis.com/css?family=Blinker&display=swap" rel="stylesheet">

	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">

</head>

<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="col-md-7">
					<a href="http://bctemas.beacukai.go.id" title=": BERGERAK – BERINOVASI">
						<img src="http://bctemas.beacukai.go.id/wp-content/uploads/2014/01/logo-copy10.png" alt="BEA CUKAI TANJUNG EMAS" sizes="(max-width: 100%)"
						width="100%">
					</a>
				</div>
				<div class="col-md-5">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12" id="atas">
	</div>
	<nav class="navbar sticky-top navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
			aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">
					<i class="fas fa-bars fa-lg"></i>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Home'); ?>">BERANDA</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="<?php echo base_url('About/profil'); ?>" id="navbarDropdownMenuLink" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TENTANG KAMI</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo base_url('About/profil'); ?>">PROFIL KANTOR</a>
							<a class="dropdown-item" href="<?php echo base_url('About/organisasi'); ?>">STRUKTUR ORGANISASI</a>
							<a class="dropdown-item" href="<?php echo base_url('About/nilai_kemenkeu'); ?>">NILAI-NILAI KEMENKEU</a>
							<a class="dropdown-item" href="<?php echo base_url('About/tugas_fungsi_djbc'); ?>">TUGAS DAN FUNGSI DJBC</a>
							<a class="dropdown-item" href="<?php echo base_url('About/visi_misi_motto'); ?>">VISI-MISI-MOTTO</a>
							<a class="dropdown-item" href="<?php echo base_url('About/janji_layanan'); ?>">JANJI LAYANAN</a>
							<a class="dropdown-item" href="<?php echo base_url('About/budaya_kerja'); ?>">BUDAYA KERJA KEMENKEU</a>
							<a class="dropdown-item" href="<?php echo base_url('About/wilayah_kerja'); ?>">WILAYAH KERJA</a>
							<a class="dropdown-item" href="<?php echo base_url('About/peta'); ?>">PETA KAMI</a>
							<a class="dropdown-item" href="<?php echo base_url('About/logo'); ?>">LOGO</a>
							<a class="dropdown-item" href="<?php echo base_url('About/target_penerimaan'); ?>">TARGET PENERIMAAN</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">BERITA</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo base_url('Berita/agenda_kegiatan'); ?>">AGENDA & KEGIATAN</a>
							<a class="dropdown-item" href="<?php echo base_url('Berita/artikel'); ?>">ARTIKEL</a>
							<a class="dropdown-item" href="<?php echo base_url('Berita/pengumuman_informasi'); ?>">PENGUMUMAN-INFORMASI</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">GALERI</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo base_url('Galeri/foto'); ?>">GALERI FOTO</a>
							<a class="dropdown-item" href="<?php echo base_url('Galeri/video'); ?>">GALERI VIDEO</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">FAQ</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo base_url('Faq/cukai'); ?>">CUKAI</a>
							<a class="dropdown-item" href="<?php echo base_url('Faq/kepabeanan'); ?>">KEPABEANAN</a>
							<a class="dropdown-item" href="<?php echo base_url('Faq/lain'); ?>">LAIN-LAIN</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Suara_anda'); ?>">SUARA ANDA</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Peraturan'); ?>">DIREKTORI PERATURAN</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
						aria-expanded="false">
							LINK
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?php echo base_url('Link/djbc'); ?>">DJBC</a>
							<a class="dropdown-item" href="<?php echo base_url('Link/kemenkeu'); ?>">KEMENKEU</a>
							<a class="dropdown-item" href="<?php echo base_url('Link/asean_customs'); ?>">ASEAN CUSTOMS</a>
							<a class="dropdown-item" href="<?php echo base_url('Link/instansi_terkait'); ?>">INSTANSI TERKAIT</a>
							<a class="dropdown-item" href="<?php echo base_url('Link/mitra_kerja'); ?>">MITRA KERJA</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('Browse_tarif'); ?>">BROWSE TARIF</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://bctemas.beacukai.go.id/aplikasi/">APLIKASI BEA CUKAI</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
