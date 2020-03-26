<!-- tabel item -->
<div class="jumbotron jumbotron-fluid">
	<!-- <a href="#" class="btn btn-success" style="float: right;margin-right: 15px;" data-toggle="modal" data-target="#tambah">Tambah Data</a> -->
  	<table class="table table">
  		<tr>
  			<th>No.</th>
  			<th>No. Nota</th>
  			<th>Nama Barang</th>
  			<th>Jumlah Jual</th>
  			<th>Harga Jual</th>
  			<th>Total Pembayaran</th>
  			<th>Tanggal</th>
  			<!-- <th colspan="2">Action</th> -->
  		</tr>
  		<?php 
  			
  			// $query = "SELECT * FROM nota";
  			// $relasi = "SELECT * FROM nota,item where nota.nmbrg=item.nmbrg";
  			// $sql = mysqli_query($koneksi, $relasi);
  			$nomor = 1;
  			$totalPenjualan = 0;
  			foreach($penjualan as $data){
  				?>
  				<tr>
  					<?php
  					$totalPenjualan = ($totalPenjualan + $data['total']);
  					?>
  					<td><?php echo $nomor ?></td>
  					<td><?php echo $data['nonota'] ?></td>
  					<td><?php echo $data['nmbrg'] ?></td>
  					<td><?php echo $data['jmlJual'] ?></td>
  					<td><?php echo $data['hargaJual'] ?></td>
  					<td><?php echo $data['total'] ?></td>
  					<td><?php echo $data['tgl'] ?></td>
  					<!-- <td><img src="../asset/img/food/<?php echo $data['gambar'] ?>" alt="" width="150px"></td> -->
  					<!-- <td><a href="#" data-toggle="modal" data-target="#edit-<?php echo $data['kdbrg']?>" class="btn btn-primary" style="padding-right: 20px; padding-left: 20px;">Edit</a></td> -->
  					<!-- <td><a href="../hapusItem.php?kode=<?php echo $data['kdbrg'] ?>" class="btn btn-danger">Delete</a></td> -->

  				</tr>
  				<?php
  				$nomor++;
				
  			}
  		 ?>
  	</table>
							 <h5 style="right: 0;">Total Penjualan : <?php echo $totalPenjualan ?></h5>
</div>
<br><br>
 <!-- tabel item -->