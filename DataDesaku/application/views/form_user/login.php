 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>DataDesaku</title>
	<?php $this->load->view('inc/link_atas'); ?>
</head>
	
<body>
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li><a href="<?php echo base_url('login');?>"><span  aria-hidden="true"></span>login admin</a></li>
				<li class="active">Login user</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- login -->
	<div class="login">
		<div class="container" >
			<H2 >Selamat Datang di Website DataDesaku</H2>
			<h2>Login Akun USER</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="<?php echo site_url('loginuser/aksi_login'); ?>" method="POST">
					<input type="text" name="username" placeholder="Username Anda" required=" " >
					<input type="password" name="password" placeholder="Password Anda" required=" " >
					<!-- <div class="forgot">
						<a href="#">Lupa Password</a>
					</div> -->
					<input type="submit" value="Login">
				</form>
			</div>
			<!--<h4>For New People</h4>-->
			<p><a href="<?php echo site_url('tambah_akunuser/tambah_Akun');?>">Daftar Disini</a> atau Kembali ke <a href="<?php echo base_url(); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
<!-- //login -->
<!-- Bootstrap Core JavaScript -->
<?php $this->load->view('inc/link_bawah'); ?>
<!-- Bootstrap Core JavaScript -->
</body>
</html>