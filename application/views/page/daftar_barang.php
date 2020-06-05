<!-- tabel item -->
<div class="jumbotron jumbotron-fluid">
	<a href="#" class="btn btn-success" style="float: right;margin-right: 15px;" data-toggle="modal" data-target="#tambah">Tambah Data</a>
  	<table class="table table">
  		<tr>
  			<th>No.</th>
  			<th>Kode Barang</th>
  			<th>Nama Barang</th>
  			<th>Stok</th>
  			<th>Harga</th>
  			<th>Deskripsi</th>
  			<th>Gambar</th>
  			<th colspan="2">Action</th>
  		</tr>
  		<?php 
  			$nomor = 1;
  			foreach($item as $data){
  				?>
  				<tr>
  					<td><?php echo $nomor ?></td>
  					<td><?php echo $data['kdbrg'] ?></td>
  					<td><?php echo $data['nmbrg'] ?></td>
  					<td><?php echo $data['stok'] ?></td>
  					<td><?php echo $data['harga'] ?></td>
  					<td><?php echo $data['deskripsi'] ?></td>
  					<td><img src="<?php echo base_url() ?>/asset/img/food/<?php echo $data['gambar'] ?>" alt="" width="150px"></td>
  					<td><a href="#" data-toggle="modal" data-target="#edit-<?php echo $data['kdbrg']?>" class="btn btn-primary" style="padding-right: 20px; padding-left: 20px;">Edit</a></td>
  					<td><a href="<?php echo base_url(). 'main/deleteItem' ?>?kode=<?php echo $data['kdbrg'] ?>" class="btn btn-danger">Delete</a></td>

  				</tr>
  				<?php
  				$nomor++;
				?>
				<!-- awal modal edit barang -->
					<div class="modal" tabindex="-1" role="dialog" id="edit-<?php echo $data['kdbrg']?>">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title">Edit <?php echo $data['nmbrg'] ?></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body text-left">
							  	<!-- edit -->
					        <!-- <div class="container text-left" style="background-color: lightgray; width: 550px; height: 800px; border-radius: 10px;"> -->
							  	<form action="<?php echo base_url(). 'main/editItem' ?>" method="post">
							 	<div class="form-group">
							 		<label for="kdbrg">Kode Barang</label>
							 		<input type="text" name="kdbrg" maxlength="20" class="form-control" disabled value="<?php echo $data['kdbrg'] ?>">
							 		<input type="hidden" name="kodes" value="<?php echo $data['kdbrg'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="kdbrg">Nama Barang</label>
							 		<input type="text" name="nmbrg" maxlength="20" class="form-control" disabled value="<?php echo $data['nmbrg'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="kdbrg">Stok</label>
							 		<input type="text" name="stok" maxlength="20" class="form-control" value="<?php echo $data['stok'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="harga">Harga</label>
							 		<input type="text" name="harga" maxlength="20" class="form-control" value="<?php echo $data['harga'] ?>">
							 	</div>
							 	<div class="form-group">
							 		<label for="deskripsi">Deskripsi</label>
							 		<input type="text" name="deskripsi" maxlength="20" class="form-control" value="<?php echo $data['deskripsi'] ?>">
							 	</div>
							 	<input type="submit" name="edit" value="Edit" class="btn btn-primary">
							 </form>
							  <!-- </div> -->
							  	<!-- edit -->
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					<!-- ahir modal edit barang -->
				<?php
  			}
  		 ?>
  	</table>
</div>
<br><br>
 <!-- tabel item -->




	<!-- awal modal tambah barang -->
	<div class="modal" tabindex="-1" role="dialog" id="tambah">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Contact US!</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body text-left">
			  	<!-- tambah -->
	        <!-- <div class="container text-left" style="background-color: lightgray; width: 550px; height: 800px; border-radius: 10px;"> -->
			  	<form action="<?php echo base_url(). 'main/do_upload' ?>" method="post" enctype="multipart/form-data">
			 	<div class="form-group">
			 		<label for="kdbrg">Kode Barang</label>
			 		<input type="text" name="kdbrg" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Nama Barang</label>
			 		<input type="text" name="nmbrg" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Stok</label>
			 		<input type="text" name="stok" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="harga">Harga</label>
			 		<input type="text" name="harga" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="deskripsi">Deskripsi</label>
			 		<input type="text" name="deskripsi" maxlength="25" class="form-control">
			 	</div>
			 	<div class="form-group">
			 		<label for="kdbrg">Gambar</label>
			 		<input type="file" name="foto" id="foto">
			 	</div>
				
			 	<input type="submit" name="upload" value="Tambah Item" class="btn btn-primary">
			 </form>
			  <!-- </div> -->
			  	<!-- tambah -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- ahir modal tambah barang -->