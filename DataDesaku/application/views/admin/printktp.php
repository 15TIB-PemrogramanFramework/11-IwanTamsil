<h1 style="text-align:center">Daftar KTP <?php echo date('d-m-Y'); ?></h1>
<br/>
<table border="1" align="center">
	<tr style="background-color: grey">
        <th>NO</th>
    	<th>NIK</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>Tanggal Lahir</th>
        <th>KETERANGAN</th>
    </tr>
    
    <?php
        $no = 0;
    	$query = $this->model->cetakktp();
		
		foreach($query->result() as $row):
        $no++;
	?>
    
    <tr>
        <td><?php echo $no; ?></td>
    	<td><?php echo $row->nik;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->alamat;?></td>
        <td><?php echo $row->tgl_ktp;?></td>
        <td><?php echo $row->keterangan;?></td>
    </tr>
    
    <?php
		endforeach;
   	?>
</table>