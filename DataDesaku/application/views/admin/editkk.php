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
                                <span>ADMIN <i class="fa fa-caret-down"></i></span>
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
                    <h1>Isi Data Kk</h1>
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
                                <form role="form" id="" action="<?php echo base_url(); ?>admin/updatekk" method="post" enctype="multipart/form-data">
                               
                                 <input type="hidden" name="id_kk" value="<?php echo $id_kk; ?>">        
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" value="<?php echo $NIK; ?>" class="form-control" name="NIK">
                                  </div>
                                  <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" value="<?php echo $nama; ?>" class="form-control" name="nama">
                                  </div>

                                   <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" value="<?php echo $jenis_kelamin; ?>" class="form-control" name="jenis_kelamin">
                                  </div>

                                  
                                  <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" value="<?php echo $alamat; ?>" name="alamat">
                                  </div>
                                  <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tgl_kk" type="text" value="<?php echo $tgl_kk; ?>" class="form-control datepicker-input" required>
                                  </div>
                                  <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="keterangan" style="height: 140px; resize: none;"><?php echo $keterangan; ?></textarea>
                                  </div>

                                  <div class="form-group">
                                    <label>Gambar</label>
                                     <input name="gambar" type="file" value="<?php echo $gambar; ?>" class="form-control" required>
                                     </div>
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