<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DataDesaku</title>
	<?php $this->load->view('inc/link_atas'); ?>
	
</head>
<body>
	 
	<!-- Profil -->
	<div class="login">
		<div class="container">
			<h2>Edit Data Akun</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<form action="<?php echo $action; ?>" method="POST">


					<input type="text" name="nama_warga" value="<?php echo $nama_warga;?>" placeholder="Nama Depan Anda" required=" " >

					<label>Agama</label>
					<select class="form-control select2" name="id_agama" style="width: 100%;">
						<?php foreach ($agama as $key => $value) { ?>
						<option value="<?php echo $value->id_agama ?>"><?php echo $value->nama_agama;?></option>
						<?php } ?>
				</select>
				<br>
					<input type="text" name="alamat" value="<?php echo $alamat;?>" placeholder="Alamat" required=" " >
					<input type="password" name="password" value="<?php echo $password;?>"  placeholder="Password Baru Anda" required=" " >
					
					<label>Dusun</label>
					<select class="form-control select2" name="id_dusun" style="width: 100%;">
						<?php foreach ($dusun as $key => $value) { ?>
						<option value="<?php echo $value->id_dusun ?>"><?php echo $value->nama_dusun;?></option>
						<?php } ?>
				</select>
					
				
					<input type="hidden" name="username" value="<?php echo $username; ?>" />
					<!-- <div class="forgot">
						<a href="#">Lupa Password</a>
					</div> -->
					<input type="submit" value="<?php echo $button;?>">
				</form>
			</div>
			<!--<h4>For New People</h4>-->
			<p><a href="<?php echo site_url('tambah_akunuser/tambah_Akun');?>">Daftar Disini</a> atau Kembali ke <a href="<?php echo base_url('menuuser'); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
			
	 
</body>
</html>