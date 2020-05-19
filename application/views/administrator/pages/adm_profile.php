<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <br>

        <!-- card untuk profile -->
        <div class="card">
            <div class="card-header bg-primary">
                Edit Profile
            </div>
            <div class="card-body">
                <div class="container text-center">
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
        <!-- akhir card untuk profile -->