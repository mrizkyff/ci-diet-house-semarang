  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>/asset/css/bootstrap.min.css">



    <title>Diet House Semarang</title>
  </head>
  <body style="background-color: #BFBDC1; width: 80%; margin-right: auto; margin-left: auto;" class="text-center">
  
  <!-- progress -->
  <div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
  <!-- progress -->

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a href="#"><img src="<?php echo base_url() ?>/asset/img/LOGO.png" width="120px;" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	    		<a href="" class="text-dark nav-link">     </a>
	    	</li>
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo base_url('main') ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url() ?>main?category=1">Weight Loss <span class="sr-only"></span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url() ?>main?category=2">Weight Gain <span class="sr-only"></span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url() ?>main?category=3">Muscle Building <span class="sr-only"></span></a>
	      </li>
	      <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Special Needs
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="<?php echo base_url() ?>main?category=4">Pregnancy</a>
			<a class="dropdown-item" href="<?php echo base_url() ?>main?category=5">Stroke</a>
			<a class="dropdown-item" href="<?php echo base_url() ?>main?category=6">Diabetes</a>
			<a class="dropdown-item" href="<?php echo base_url() ?>main?category=7">Cholesterol</a>
			<a class="dropdown-item" href="<?php echo base_url() ?>main?category=8">Hypertensi</a>
			</div>
		</li>
		<?php
		if($this->session->userdata('status') == 'login'){
			?>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <img src="<?=base_url()?>/asset/img/user/<?=$this->session->userdata('foto')?>" alt="" class="img" style="width:25px;">
			  <?=$this->session->userdata('username');?>  
			  </a>
			  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="<?= base_url('main/profile') ?>">Akun Saya</a>
			  <a class="dropdown-item" href="#">Keranjang Saya</a>
			  <a class="dropdown-item" href="<?php echo base_url('login/logout') ?>">Logout</a>
			  </div>
		  </li>
			<?php
		}
		else{
			?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Akun
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="<?php echo base_url('login') ?>">Login</a>
				<a class="dropdown-item" href="<?php echo base_url('registrasi') ?>">Daftar</a>
				</div>
			</li>
			<?php
		}
		?>
		
		<!-- <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(). 'main/daftar_barang' ?>">Daftar Barang</a>
	      </li>
	      <li class="nav-item">
	      	<a class="nav-link" href="<?php echo base_url(). 'main/laporanPenjualan' ?>">Laporan Penjualan</a>
	      </li>	        -->
	    </ul>
	  </div>
	</nav>
  <!-- navbar -->