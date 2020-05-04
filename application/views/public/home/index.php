<!-- awal slide gambar -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	    	<a href="page/akun.php">
	      	<img src="asset/img/slide001.png" class="d-block w-100" alt="...">	
	    	</a>
	    </div>
	    <div class="carousel-item">
	      <img src="asset/img/slide002.png" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="asset/img/slide003.png" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
  <!-- akhir slide gambar -->
    <!-- Optional JavaScript -->

    <!-- awal jumbotron -->
    <div class="jumbotron bg-dark text-light">
    	<div class="container">
    		
	  <h1 class="display-4">DIET HOUSE SEMARANG</h1>
	  <p class="lead" style="font-size: 17px;">Diet House Semarang menyediakan pilihan menu bagi anda yang ingin memulai hidup sehat dengan beragam kategori produk yang tersedia.</p>
	  <hr class="my-4" style="border-color: white;">
	  <p style="font-size: 17px;">Kami akan membantu anda untuk menyediakan menu makanan yang sehat sesuai kebutuhan anda.
	  Liburan sudah selesai, pastikan kamu kembali sehat dengan memulai catering sehat DietHouseSemarang dan dapatkan Harga Spesial hingga 30%
	  Periode 1-30 Juni 2020
	  Syarat dan ketentuan berlaku.
	  <br>
	  <br>
	  DietHouseSemarang menjadikan beberapa kategori Diet sesuai dengan keperluan pelanggan yaitu: <a href="page/specialNeeds.php">Special Needs</a>, <a href="page/alaCarte.php">AlaCarte</a>,<a href="page/muscleBuilding.php">Muscle Building</a>, <a href="page/pregnancy.php">Pregnancy</a>, <a href="page/snack.php">Snack and Drink</a> dan <a href="page/weightLoss.php">Weight Loss</a>.
		<br>
		<br>
	  Berbagai promosi dan diskon menarik selalu tersedia setiap periode pada setiap bulan. Menu-menu tersebut bisa dipesan secara berlangganan, namun sebagian juga bisa dipesan secara Ala Carte.
	  <br>
	  <br> 
	  <center>
	  	<!-- <button class="btn btn-danger" style="padding: 10px;">LANGGANAN SEKARANG</button> -->
	  	<a href="page/akun.php" class="btn btn-danger" style="padding: 10px;">LANGGANAN SEKARANG</a>
	  </center>
	  <br>
	  </p>
	</div>

    	</div>
    <!-- akhir jumbotron -->


    <!-- awal container -->
   	<div class="jumbotron jumbotron-fluid bg-secondary text-light" style="margin-top: -100px;">
	  <div class="container">
	    <h3>Telah Terbukti</h3>
	    <h3>Membantu Pelanggan Untuk:</h3>
	    <br>
	    <br>
	    <center>
	    	<!-- KEUNGGULAN -->
	    	<div class="container">
	    		
	    	<div class="row">
	    		<div class="col-sm-4">
	    			<img src="asset/img/tambah.png" width="100px" alt="">
	    		</div>
	    		<div class="col-sm-4">
	    			<img src="asset/img/special.png" width="100px" alt="">
	    		</div>
	    		<div class="col-sm-4">
	    			<img src="asset/img/kurang.png" width="100px" alt="">
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Menambah berat badan</p>
	    		</div>
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Menangani kasus kebutuhan khusus</p>
	    		</div>
	    		<div class="col-sm-4">
	    			<p class="text-center" style="font-size: 17px;">Mengurangi berat badan</p>
	    	</div>
	    	</div>
		<!-- AKHIR KEUNGGULAN -->


		<br><br>
	  <hr class="my-4" style="border-color: white;">
		<!-- THUMBNAIL -->
			<h3>Health Me UP!</h3>
	  <br>
	    	<div class="row">
	    		<?php 
	    			foreach($menu as $data){

	    				
	    				?>

						<!-- thumbnail -->
						<div class="col-sm-4">
			    			<div class="card" style="width: 19rem; height: 600px;margin-top: 50px;">
							  <img src="asset/img/food/<?php echo $data['gambar'] ?>" class="card-img-top" alt="..." style="height:300px; width:auto;">
							  <div class="card-body">
								<div class="container text-dark text-left">
									<h5><b><?php echo $data['nmbrg']; ?></b></h5>
									<br>
									<?php echo $data['deskripsi'] ?>
									<br>
								</div>
							  </div>
							    <div class="card-footer">
									<div class="container text-dark text-left">
										SKU : <?php echo $data['kdbrg']; ?>
										<br>
										Rp. <?php echo $data['harga']; ?>
										<br>	
										Tersedia : <?php echo $data['stok']; ?>
									</div>
									<a href="" class="btn btn-warning text-light" style="padding-right: 25px; padding-left: 25px;width: 100%" data-toggle="modal" data-target="#modal-<?php echo $data['kdbrg'] ?>" style="bottom:0;">Beli</a>
							    </div>
							</div>
			    			</div>

						<!-- ahir thumbnail -->
						
	    				<?php
	    			}
	    		 ?>
	    	</div>
		<!-- AKHIR THUMBNAIL -->


		<br><br><br>
		<div class="row">
			<div class="col-sm-4">
				<img src="asset/img/food/ayam.jpg" alt="" width="300px" class="rounded-circle">
			</div>
			<div class="col-sm-4">
				<img src="asset/img/food/bbq.jpg" alt="" width="300px" class="rounded-circle">
			</div>
			<div class="col-sm-4">
				<img src="asset/img/food/ikan.jpg" alt="" width="300px" class="rounded-circle">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">Almond Chicken Fried Rice</p>
			</div>
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">BBQ Chicken</p>
			</div>
			<div class="col-sm-4">
				<p class="text-center" style="font-size: 17px;">Ikan Bumbu Rujak</p>
			</div>
		</div>
	    </center>
    <!-- akhir container -->
	</p></div></div></div></p>