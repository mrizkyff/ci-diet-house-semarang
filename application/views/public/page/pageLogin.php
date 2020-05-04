<head>
<link rel="stylesheet" href="<?php echo base_url() ?>/asset/plugins/fontawesome-free/css/all.min.css">
<style type="text/css">
	body {
		color: #4e4e4e;
		background: #e2e2e2;
		font-family: 'Roboto', sans-serif;
	}
    .form-control {
		background: #f2f2f2;
        font-size: 16px;
		border-color: transparent;
		box-shadow: none !important;
	}
	.form-control:focus {
		border-color: #91d5a8;
        background: #e9f5ee;
	}
    .form-control, .btn {        
        border-radius: 2px;
    }
	.login-form {
		width: 380px;
		margin: 0 auto;
	}
    .login-form h2 {
        margin: 0;
        padding: 30px 0;
        font-size: 34px;
    }
	.login-form .avatar {
		margin: 0 auto 30px;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar img {
		width: 100%;
	}
    .login-form form {
		color: #7a7a7a;
		border-radius: 4px;
    	margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;		
    }
    .login-form .btn {
		font-size: 16px;
		line-height: 26px;
		min-width: 120px;
        font-weight: bold;
		border: none;		
    }
	.login-form .btn:hover, .login-form .btn:focus{
        outline: none !important;
	}
	.checkbox-inline {
		margin-top: 14px;
	}
	.checkbox-inline input {
		margin-top: 3px;
	}
    .login-form a {
	}	
	.login-form a:hover {
		text-decoration: underline;
	}
	.hint-text {
		color: #999;
        text-align: center;
		padding-bottom: 15px;
	}
</style>
</head>
<body>
    
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

  <!-- jumbotron -->
  <div class="jumbotron text-light bg-dark">
  <div class="login-form">
        <h2 class="text-center">Member Login</h2>
        <form action="<?php echo base_url('login/act_login') ?>" method="post">
            <div class="avatar bg-secondary">
                <h1><i class="fas fa-users text-light"></i></h1>
            </div>           
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">	
            </div>
            <div class="form-group">
                <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
            </div>        
            <div class="form-group clearfix">
                <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
                <button type="submit" class="btn btn-warning btn-lg pull-right text-light">Sign in</button>
            </div>		
        </form>
        <div class="hint-text">Don't have an account? <a href="#">Sign up here</a></div>
    </div>
  </div>
  <!-- akhir jumbotron -->
</body>