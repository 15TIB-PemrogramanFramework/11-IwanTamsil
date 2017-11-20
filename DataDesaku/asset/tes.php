<?php
$data=array('1','2','3','7','8','9','10');

$k=count($data);
for($i=0;$i<$k;$i++){
	$j=$i+1;
	if($j!=$data[$i]){
		$s[]=$j;
		echo $j;
		$k=0;

	}

}

echo '<i>'.$s[0].'</i>';
?>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>