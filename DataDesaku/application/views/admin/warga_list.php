<?php $this->load->view('inc/heada'); ?>
<body class="fixed">
    <!-- Header -->
    <header>
        <a href="" class="logo"><i class="fa fa-users"></i> <span>WELCOME</span></a>
        <nav class="navbar navbar-static-top">
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

    <!-- wrapper -->
   
        <div class="rightside">
            <div class="page-head">
                <h1>DATA WARGA</h1>
            </div>

            <div class="content">
                 <div class="row">
                    <div class="col-md-12">
                    
                   
                        <div class="box">
                            <div class="box-title">
                                <h3>Data Warga Registrasi </h3>
                            </div><!-- /.box-title -->
                            <div class="box-body">
                               <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Warga</th>
                                        <th>Agama</th>
                                        <th>Dusun</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0; foreach($warga as $row) { $no++; ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->nama_warga; ?></td>
                                        <td><?php echo $row->nama_agama; ?></td>
                                        <td><?php echo $row->nama_dusun; ?></td>
                                        <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->password; ?></td>
                                        <td><?php echo $row->alamat; ?></td>
                                        <td>

 
                                         <?php echo anchor(site_url('admin_user/editwarga/'.$row->username),'<i class ="fa fa-edit "></i>', 'class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="EDIT" '); ?>

                                            <?php echo anchor(site_url('admin_user/deletewarga/'.$row->username),'<i class ="fa fa-trash-o"></i>', 'class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="HAPUS" '); ?>
                                          
                
                                             
                                            
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
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
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#example1").dataTable();
    $('#example2').dataTable({
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": false,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": false
    });
});
</script>
</body>
</html>