<html>
<head>


    <meta charset="UTF-8">
    <title>Project UTS </title>
    <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
    <meta name="author" content="Web Domus Italia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>style/slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/";?>style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
    <div class="header">
            <ul class="socialicon">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <ul class="givusacall">
                
            </ul>
            <ul class="givusacall">
                
            </ul>
            <ul class="logreg" >
           <?php 
                    if(!$this->session->userdata("username")==true) { 
                        ?>
                       
                            <li><a href="<?php echo site_url('tambah_akunuser/tambah_Akun');?>">Daftar</a></li>
                            <li><a href="<?php echo site_url('loginuser');?>">Login</a></li>
                           
                       
                        <?php
                    }else { ?>
                   
<?php
//Mencari Nama Dari email yang sudah login 
$username = $this->session->userdata('username');
$query = $this->db->query("SELECT nama_warga FROM warga WHERE username = '$username';");
foreach ($query->result() as $row)
{ ?>
                            <li><a href="<?php echo site_url('profil_warga');?>"><?php echo $row->nama_warga; } ?></a></li>
                            <li><a href="<?php echo site_url('loginuser/logout');?>">Log out</a></li>
                            <!--<li><a href="contact.html">Help</a></li>-->
                        
                        <?php 
                    } 
                    ?>
                
            </ul>
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="#"><img src="<?php echo base_url()."assets/";?>image/" alt=""></a>
            </div>   
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="<?php echo base_url('menuuser') ?>">HOME</a> </li>
                 <li>
                    <a href="<?php echo base_url('menuuser/profil') ?>">Profil</a>
 
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Layanan <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdowncostume">
                       <li> <a href="<?php echo base_url('menuuser/layanan') ?>"> KTP</a></li>
                       <li> <a href="<?php echo base_url('menuuser/layanankk') ?>"> KK</a></li>
                        
                    </ul>
                </li>
             
                 <li>
                    <a href="<?php echo base_url('menuuser/kontak') ?>">Kontak</a>
 
                </li>
               
                
            </ul>
        </div>
    </nav>
</div>

