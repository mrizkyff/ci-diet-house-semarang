<!-- awal container -->
   	<div class="jumbotron jumbotron-fluid bg-secondary text-light" style="margin-top: -100px;">
	  <div class="container">
	    <!-- <h3>Checkout Item : </h3> -->
	    <h3>Checkout Item : </h3>
	    <?php 
	    	$tanggal = date("d/m/Y");
	     ?>
	     <!-- awal card -->
	     <div class="card text-dark">
		  <div class="card-header">
		    Keranjang Belanja Anda
		  </div>
		  <div class="card-body">
		    <h5 class="card-title"> Nota Pembelian <?php echo $namaBarang ?></h5>
		    <form action="<?php echo base_url(). 'main/updateStok' ?>" method="post">
		    	<div class="form-group">
		    		<label for="nonota">Nomor Nota</label>
		    		<input type="text" class="form-control" name="nonota">
		    <p class="card-text">
		    <?php  ?>
			Jumlah Pembelian : <?php echo $jumlahBeli ?>
			<br>
			Harga Barang : <?php echo $hargaBarang ?>
			<br>
			Total Bayar : <?php echo $total ?> 
			* 
			<?php echo $jumlahBeli ?>
			=
			<?php echo $total ?>
			<br>
			Tanggal Pembelian : <?php echo $tanggal ?>
		    </p>
		    		<input type="hidden" name="nmbrg" value="<?php echo $namaBarang ?>">
		    		<input type="hidden" name="hrgbrg" value="<?php echo $hargaBarang ?>">
		    		<input type="hidden" name="total" value="<?php echo $total ?>">
		    		<input type="hidden" name="jml" value="<?php echo $jumlahBeli ?>">
		    		<input type="hidden" name="tanggal" value="<?php echo $tanggal ?>">
		   				<input class="btn btn-primary" type="submit" name="submit" value="Checkout">
		    	</div>
		    </form>
		    <!-- <a href="../updateStok.php?nama=<?php echo $namaBarang ?>&jumlah=<?php echo $jumlahBarang ?>" class="btn btn-primary">Checkout</a> -->
		  </div>
		  <div class="card-footer text-muted">
		  </div>
		</div>
	     <!-- ahir card -->

	    <br>
	    <br>