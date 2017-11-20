<h1 style="text-align:center">Daftar KK  <br><?php echo date('d-m-Y'); ?></h1>
<br/>
<table border="1" align="center">
	<tr style="background-color: grey">
        <th>NO</th>
        <th>NIK</th>
        <th>NAMA LENGKAP</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>TANGGAL LAHIR</th>
        <th>KETERANGAN</th>
    </tr>
    
    <?php
        $no = 0;
    	$query = $this->model->cetakkk();
		
		foreach($query->result() as $row):
        $no++;
	?>
    
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->NIK;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->jenis_kelamin;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><?php echo $row->tgl_kk;?></td>
        <td><?php echo $row->keterangan;?></td>
        <td><?php echo $row->gambar;?></td>
    </tr>
    
    <?php
		endforeach;
   	?>
</table>