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
<html lang="en">
<head>
	<title>DataDesaku</title>
	<?php $this->load->view('inc/link_atas'); ?>
	
</head>
<body>
	 
	<!-- Profil -->
	<div class="login">
		<div class="container">
			<h2>Profil Akun</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<table class="tableProfil">
					<?php foreach ($data_warga as $key => $row) { ?>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><?php echo $row->username;?></td>
						<td><?php echo anchor(site_url('profil_warga/editAkun/'.$row->username), '<i class ="fa fa-pencil"></i>', 'class="btn btn-warning"'); ?>
						</td>
					</tr>
					 
					 <tr>
						<td>Nama Warga</td>
						<td>:</td>
						<td><?php echo $row->nama_warga;?></td>
					</tr>
					<tr>
						<td>PASSWORD</td>
						<td>:</td>
						<td><?php echo $row->password;?></td>
					</tr>
					<tr>
						<td>ALAMAT</td>
						<td>:</td>
						<td><?php echo $row->alamat;?></td>
					</tr>
					<tr>
						<td>Dusun</td>
						<td>:</td>
						<td><?php echo $row->nama_dusun;?></td>
					</tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><?php echo $row->nama_agama;?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<p>Kembali ke <a href="<?php echo base_url('menuuser'); ?>">Beranda<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div>
	</div>
	
	<!-- Profil -->
	<!-- footer -->
	 
</body>
</html>