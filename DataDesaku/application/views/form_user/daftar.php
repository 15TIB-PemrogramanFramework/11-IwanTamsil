 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<!-- start-smoth-scrolling -->
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
				<li><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Daftar</li>
			</ol>
		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- register -->
	<div class="register">
		<div class="container">
			<h2>Daftar Akun</h2>
			<div class="login-form-grids">
			<!--
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
					</div>
				</div>
			-->
			<h6>Silahkan Daftar Terlebih Dahulu</h6>
			<form action="<?php echo $action; ?>" method="post">
				<input type="text" name="nama_warga" value="<?php echo $nama_warga; ?>" placeholder="Nama Lengkap" required=" " >

				

				<label>Agama</label>
				<select class="form-control select2" name="id_agama" style="width: 100%;">
						<?php foreach ($agama as $key => $value) { ?>
						<option value="<?php echo $value->id_agama; ?>"><?php echo $value->nama_agama;?></option>
						<?php } ?>
				</select>
				<br>
				<input type="text" name="alamat" value="<?php echo $alamat; ?>" placeholder="alamat" required=" " >
				<br>
				<label>Dusun</label>
				<select class="form-control select2" name="id_dusun" style="width: 100%;">
						<?php foreach ($dusun as $key => $value) { ?>
						<option value="<?php echo $value->id_dusun; ?>"><?php echo $value->nama_dusun;?></option>
						<?php } ?>
				</select>
				<br>
				 
				<input type="text" name="username" value="<?php echo $username;?>" placeholder="Username" required=" " >
				<input type="password" name="password" value="<?php echo $password;?>" placeholder="Password Anda" required=" " >
				
				
				<!--
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
				-->
				<input type="submit" value="Daftar">
			</form>
		</div>
	<!--
		<div class="register-home">
			<a href="index.html">Home</a>
		</div>
	-->
</div>
</div>
<!-- //register -->	
<!-- Bootstrap Core JavaScript -->
 <?php $this->load->view('inc/link_bawah'); ?>
<!-- //Bootstrap Core JavaScript -->
</body>
</html>