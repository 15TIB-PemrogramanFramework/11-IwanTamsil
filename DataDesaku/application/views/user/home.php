
<?php $this-> load -> view('user/header'); ?>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
    <div id="carousel-up" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner " role="listbox">
            <div class="item active" align="center">
                <img src="<?php echo base_url()."assets/";?>image/ROHUL.jpg" alt="oldcar">
                <div class="carousel-caption">

</style>
                   
                </div>
            </div>
            <div class="item" align="center">
                <img src="<?php echo base_url()."assets/";?>image/ktp.jpg" alt="porche">
                <div class="carousel-caption">
                    
                </div>
            </div>
           
        </div>
        <nav class="navbar navbar-default midle-nav">
            <div class="navbar-header">
               
            </div>
            
                
 
            
        </nav>
    </div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
    <div class="feturedsection">
        <h1 class="text-center"> &bullet;</span>KTP & KK<span </span>&bullet;</h1>
    </div>
    <div class="feturedimage">
        <div class="row firstrow">
              <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="<?php echo base_url()."assets/";?>image/kk.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-18 col-sm-9 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>Kartu Keluarga</h1>
                            <p>"kartu keluarga ,<br>
                            Kartu Keluarga adalah Kartu Identitas Keluarga yang memuat data tentang susunan, <br>hubungan dan jumlah anggota keluarga.<br> Kartu Keluarga wajib dimiliki oleh setiap keluarga. Kartu ini berisi data lengkap tentang identitas Kepala Keluarga dan anggota keluarganya. </p>


                            <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                            <div id="readmore">
                                    <h1> Kartu Keluarga</h1>
                                    <p>" Kartu Keluarga (KK) adalah Dokumen <br>milik Pemda Provinsi setempat dan karena itu tidak boleh mencoret, mengubah, mengganti, menambah isi data yang tercantum dalam Kartu Keluarga.
,<br>
                                  <br>Setiap terjadi perubahan karena Mutasi Data dan Mutasi Biodata, wajib dilaporkan kepada Lurah dan akan diterbitkan Kartu Keluarga (KK) yang baru.
                                   
                                    </p>
                                    <button id="btnRL">READ LESS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 costumcol colborder2">
                <div class="row costumrow">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                        <img src="<?php echo base_url()."assets/";?>image/ktp2.jpg" alt="porsche1">
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                        <div class="featurecontant">
                            <h1>Kartu Tanda Penduduk</h1>
                            <p>" Kartu Tanda Penduduk yang selanjutnya disingkat KTP adalah Kartu Bukti Diri ( legitimasi ) bagi setiap Penduduk dalam Wilayah Negara Republik Indonesia .<br> KTP dapat diterbitkan apabila ada pengajuan permohonan baru, habis masa berlakunya, hilang (yang dibuktikan dengan Surat keterangan hilang dari kepolisian setempat),</p>
                        

                            <button id="btnRM2">READ MORE</button>
                            <div id="readmore2">
                            <h1>Kartu Tanda Penduduk </h1>
                          <p>"Masa berlaku KTP adalah 5 ( lima ) tahun<br> bagi penduduk yang berusia 17 tahun sampai dengan di bawah 60 tahun dan seumur hdup bagi yang berusia 60 tahun ke atas, kecuali bagi Warga Negara Asing (WNA) dan atau WNI yang terlibat organisasi terlarang, masa berlaku KTP-nya 5 ( lima ) tahun.<br></p>
                                    <button id="btnRL2">READ LESS</button>
                            </div>
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
    <!-- ______________________________________________________Bottom Menu ______________________________-->
   <?php $this-> load -> view('user/footer'); ?>