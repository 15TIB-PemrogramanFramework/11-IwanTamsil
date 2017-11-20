<?php $this-> load -> view('user/header'); ?>
 <?php $this->load->view('inc/link_atas'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
       
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator/bootstrapValidator.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/datepicker/datepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
<div class="allcontain">
    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
            <div class="item active" align="center">
                <img src="<?php echo base_url()."assets/";?>image/kk.jpg" alt="oldcar">
                <div class="carousel-caption">
                    
                </div>
            </div>
         

 
    <div class="feturedsection">
        <h1 class="text-center"><span class="bdots">&bullet;</span>Input<span class="carstxt">Data KK</span>&bullet;</h1>
        <p class="text-center"><span class="bdots"></p>
</div>
<?php echo $this->session->flashdata('sukses'); ?>

            <div class="register">
             <div class="login-form-grids">
            
                                <h3 align="center">Silahkan Isi Data KK anda disini</h3>
                       
                            
                                <form role="form" id="" action="<?php echo base_url(); ?>menuuser/inputkk_aksi" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" name="NIK">
                                  </div>
                                   <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama">
                                  </div>

                                     <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin">
                                  </div>

                                  
                                  <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat">
                                  </div>
                                  <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="tgl_kk" type="text" class="form-control datepicker-input" required>
                                  </div>
                                  <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="keterangan" style="height: 140px; resize: none;"></textarea>
                                  </div>


                                  <div class="form-group">
                                  <label>gambar KK</label>

                                    <input type="file" class="form-control" name="gambar" >
                                </div>
                                  <button type="submit" class="btn btn-info" a class="btn btn-danger btn-sm"  data-toggle="tooltip" data-placement="top" title="Simpan Data">Simpan</button>
                                </form>
                            </div>
                        </div>
                 </div>
                 </div>
                 </div>
                 </div>


<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/js/isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/js/myscript.js"></script> 
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

     
        
        <!-- Bootstrap -->
        
         <script src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
        <!-- Interface -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
         
        <script src="<?php echo base_url(); ?>assets/js/plugins/datepicker/datepicker.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){                
                //Date picker
                $('.datepicker-input').datepicker();
                
            });
        </script>
    </div>

 <?php $this-> load -> view('user/footer'); ?>