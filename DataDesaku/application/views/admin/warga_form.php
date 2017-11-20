<?php $this->load->view('inc/heada'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>DataDesaku</title>
        
        <!-- Maniac stylesheets -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate/animate.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator/bootstrapValidator.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    </head>
    <body class="fixed">
        <!-- Header -->
        <header>
            <a href="" class="logo"><i class="fa fa-users"></i> <span>WELCOME</span></a>
            <nav class="navbar navbar-static-top">
            <!--
                <a href="#" class="navbar-btn sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            -->
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                     
                        <li class="dropdown widget-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span>ADMIN<i class="fa fa-caret-down"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="footer">
                                    <a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i>Keluar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- /.header -->
         
       

            <div class="rightside">
                <div class="page-head">
                    <h1>Isi Data Warga</h1>
                </div>

                <div class="content label-normal">
                <!-- Main row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
                            <div class="box-title">
                                <h3>Isi Data</h3>
                            </div>
                            <div class="box-body">
                                <form action="<?php echo $action; ?>" enctype="multipart/form-data" method="POST" >

                                 <div class="form-group">
                                 <label><?php echo $username;?></label>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Nama warga</label>
                                    <input type="text" class="form-control" name="nama_warga" value="<?php echo $nama_warga; ?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" placeholder="" required>
                                </div>
                                
                               
                                <label>agama</label>
                                <select class="form-control select2" name="id_agama" style="width: 100%;">
                                    <?php foreach ($agama as $key => $value) { ?>
                                        <option value="<?php echo $value->id_agama; ?>"><?php echo $value->nama_agama;?></option>
                                        <?php } ?>
                                    </select>
                                <label>Dusun</label>
                                <select class="form-control select2" name="id_dusun" style="width: 100%;">
                                    <?php foreach ($dusun as $key => $value) { ?>
                                        <option value="<?php echo $value->id_dusun; ?>"><?php echo $value->nama_dusun;?></option>
                                        <?php } ?>
                                    </select>
                                    <input type="hidden" name="username" value="<?php echo $username; ?>" />

                                  <button type="submit" class="btn btn-info">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.wrapper -->
        </div>
        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
        
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- Interface -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/pace/pace.min.js" type="text/javascript"></script>
        
        <!-- Forms -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrapValidator/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datepicker/datepicker.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){                
                //Date picker
                $('.datepicker-input').datepicker();
                
            });
        </script>
    </body>
</html>