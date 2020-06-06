<!-- jumbotron footer -->
    <div class="jumbotron jumbotron-fluid bg-dark text-left text-light" style="margin-top: -100px;">
	  <div class="container">
	    <div class="row">
	    	<div class="col-sm-4">
	    		<h4>Product</h4>
	    		<a href="page/alaCarte.php">Ala Carte</a>
	    		<br>
	    		<a href="page/muscleBuilding.php">Muscle Building</a>
	    		<br>
	    		<a href="page/pregnancy.php">Pregnancy</a>
	    		<br>
	    		<a href="page/Snack.php">Snack and Drink</a>
	    		<br>
	    		<a href="page/specialNeeds.php">Special Needs</a>
	    		<br>
	    		<a href="page/weightLoss.php">Weight Loss</a>
	    	</div>
	    	<div class="col-sm-4">
	    		<h4>Help and Informations</h4>
	    		<a href="promotions.php">Promotion</a>
	    		<br>
	    		<a href="articles.php">Article</a>
	    		<br>
	    		<a href="career.php">Career</a>
	    		<br>
	    		<a href="area.php">Coverage Area</a>
	    	</div>
	    	<div class="col-sm-4">
	    		<h4>Diet House Semarang</h4>
	    		<a href="team.php">Our Team</a>
	    		<br>
	    		<a href="contact.php">Contact US!</a>
	    	</div>
	    </div>
	    <br>
		  <h4>CATERING MAKANAN SEHAT MEMBUAT HIDUP ANDA LEBIH MUDAH</h4>
		  <p style="font-size: 15px;">Dengan rutinitas yang padsat, tentu sulit menyemoatkan diri untuk berbelanja bahan-bahan berkualitas dan mengolahnya menjadi makanan sehat dan makanan enak. Untungnya saat ini sudah banyak catering makanan sehat dan bergizi dengan masakan nusantara dan mancanegeara yang isa diandalkan untuk diet sehat dan menjaga berat badan tetap ideal di tengah rutinitas yang padat. DietHouse catering online di kota Semarang adalah contohnya.
		  </p>

		  <p class="text-center">Copyright &copy DietHouseSemarang 2019 </p>

	  </div>
	</div>
    <!-- akhir jumbotron footer -->


    <!-- <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="<?php echo base_url() ?>/asset/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url() ?>/asset/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>/asset/js/bootstrap.min.js"></script> -->


    <!-- DataTables -->
    <!-- javasccript cdn -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

<script>
	    $(document).ready(function () {
            tampilProfile();
            
            function tampilProfile(){
                var id = <?= json_encode($this->session->userdata('idUser'))?>

                $.ajax({
                    type: "POST",
                    url: "<?= base_url('profile/getProfile')?>",
                    data: {id:id},
                    dataType: "JSON",
                    success: function (response) {
                        var lvl = ''
                        var stat = ''
                        if(response['level']==1){
                            lvl = 'Admin'
                        }
                        else if(response['level']==2){
                            lvl = "User"
                        }

                        if(response['status'] == 1){
                            stat = 'Active'
                        }
                        else if(response['status'] == 2){
                            stat = 'Non active'
                        }
                        else if(response['status'] == 3){
                            stat = "Suspended"
                        }

                        $('#fname').val(response['f_name'])
                        $('#lname').val(response['l_name'])
                        $('#username').val(response['username'])
                        $('#password').val(response['password'])
                        $('#email').val(response['email'])
                        $('#telp').val(response['telp'])
                        $('#alamat').val(response['alamat'])
                        $('#level').val(lvl)
                        $('#status').val(stat)
                    }
                });
            }
            
            $(document).ready(function(){ 
                // upload foto
                $('#submit').submit(function(e){
                    e.preventDefault(); 
                    var id = $('#idUser').val();
                        // $.ajax({
                        //     url:'<?php echo base_url();?>profile/do_upload',
                        //     type:"post",
                        //     data:new FormData(this),
                        //     processData:false,
                        //     contentType:false,
                        //     cache:false,
                        //     async:false,
                        //     success: function(data){
                        //         // console.log(data)
                                
                        //     }
                        // });
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('profile/do_upload')?>",
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            cache: false,
                            asycn: false,
                            success: function (response) {
                                alert('Profil berhasil diperbarui, silakan login!');
                                // console.log(response);
                                // tampilProfile();
                                window.location = "<?= base_url('Login') ?>";
                            }
                        });
                    });

                });
        });
</script>