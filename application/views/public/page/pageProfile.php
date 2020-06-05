    <!-- awal jumbotron -->
    <div class="jumbotron bg-light text-dark text-left">
    	<div class="container">
            <!-- card untuk profile -->
            <div class="card">
                <h1 class="text-center">Edit profile</h1>
                <div class="card-body">
                    <div class="container">
                        <i class="fa fa-user-circle fa-7x text-secondary"></i>
                    </div>
                    <!-- id  -->
                    <form id="submit">
                        <input type="hidden" id="idUser" name="idUser" value="<?= $this->session->userdata('idUser') ?>">
                        <div class='form-group'>
                            <label for='fname'>First Name</label>
                            <input type='text' id='fname' name='fname' class='form-control' disabled>
                        </div>
                        <div class='form-group'>
                            <label for='lname'>Last Name</label>
                            <input type='text' id='lname' name='lname' class='form-control' disabled>
                        </div>
                        <div class='form-group'>
                            <label for='username'>Username</label>
                            <input type='text' id='username' name='username' class='form-control' disabled>
                        </div>
                        <div class='form-group'>
                            <label for='password'>Password</label>
                            <input type='password' id='password' name='password' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='email'>Email</label>
                            <input type='email' id='email' name='email' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='telp'>Telepon</label>
                            <input type='text' id='telp' name='telp' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='alamat'>Alamat</label>
                            <input type='text' id='alamat' name='alamat' class='form-control'>
                        </div>
                        <div class='form-group'>
                            <label for='level'>Role</label>
                            <input type='text' id='level' name='level' class='form-control' disabled>
                        </div>
                        <div class='form-group'>
                            <label for='status'>Status</label>
                            <input type='text' id='status' name='status' class='form-control' disabled>
                        </div>
                        <div class='form-group'>
                            <label for='foto'>Foto</label>
                            <input type='file' id='foto' name='foto' class='form-control'>
                            <img src="<?= base_url() ?>/asset/img/user/<?= $this->session->userdata('foto')?>" alt="" class="img-thumbnail" style="width:100px; height:auto;">
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnUpdateProfile" style="float:right;">Simpan</button>
                    </form>
                </div>
            </div>
            <br>
            <!-- akhir card untuk profile -->
	    </div>
    </div>
    <!-- akhir jumbotron -->


   
	</p></div></div></div></p>