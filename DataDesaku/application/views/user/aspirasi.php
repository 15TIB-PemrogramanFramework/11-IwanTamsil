<?php $this-> load -> view('user/header'); ?>
            <div class="row no-gutter"><!-- row -->
                
                <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->
                	
                    <div class="col-padded"><!-- inner custom column -->
                    
                    	<div class="row gutter"><!-- row -->
                        
                        	<div class="col-lg-12 col-md-12">
                            
                                <hr>
                                <h1 class="page-title">Kontak Kami</h1>
                                
                                <div class="news-body">
                                    
                                    <div class="row" style="margin-top:-40px;">
                                    	<div class="col-lg-6 col-md-6 col-sm-12">
                                        	<h6 class="remove-margin-bottom">Alamat Kantor Kami</h6>
											<p class="small"> Desa Kepenuhan Raya</p>                                        
                                        </div>
                                        
                                    	<div class="col-lg-6 col-md-6 col-sm-12">
                                        	<h6 class="remove-margin-bottom">Hubungi Kami</h6>
											<p class="small">Tel:+62 822-8486-9489   |   Fax: </p>
                                        </div>
                                    </div>
                                    
                                    <hr />
                                    
                                    <h6>Silahkan Kirim Pesan</h6>
          <?php echo $this->session->flashdata('sukses'); ?>

                                    
                                    <form id="contactform" method="post" action="<?php echo base_url('menuuser/pesanuser');?>">
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="contactName"><span class="required">*</span> Name</label>
                                                <input type="text" aria-required="true" size="30" value="" name="nama" id="contactName" class="form-control requiredField"  required />
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <label for="email"><span class="required">*</span> E-mail</label>
                                                <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" required="" />
                                            </div>
                                        </div><!-- ends row --> 
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group col-lg-12">
                                                <label for="contactSubject">Message Subject</label>
                                                <input type="text" aria-required="true" size="30" value="" name="subject" id="contactSubject" class="form-control"  required="" />
                                            </div>
                                        </div><!-- ends row -->
                                        
                                        <div class="row"><!-- starts row -->
                                            <div class="form-group clearfix col-lg-12">
                                                <label for="comments"><span class="required">*</span> Message</label>
                                                <textarea aria-required="true" rows="5" cols="45" name="pesan" id="comments" class="form-control requiredField mezage" required=""></textarea>
                                            </div>
                            
                                            <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                                                <input type="hidden" name="submitted" id="submitted" value="true" />
                                                <input type="submit" value="Kirim Pesan" id="submit" name="submit" class="btn btn-default" />
                                            </div>
                                        </div><!-- ends row -->
                                    </form>
                                </div>
                                </div>

                            
                            </div>
                        
                        </div><!-- row end -->               
                    
                    </div><!-- inner custom column end -->
                    
                </div><!-- doc body wrapper end -->

    
    <link href="<?php echo base_url();?>assets/front/js/dropdown-menu/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo base_url();?>assets/front/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/front/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo base_url();?>assets/front/js/audioplayer/audioplayer.css" rel="stylesheet" type="text/css"><!-- Audioplayer -->
    <link href="<?php echo base_url();?>assets/front/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->

    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
             <script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/js/isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/js/myscript.js"></script> 
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/";?>source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>   
               
 <?php $this-> load -> view('user/footer'); ?>