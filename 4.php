<?php 
function betweenDays($n1,$n2)
	{
		$awal = strtotime($n1);
		$akhir = strtotime($n2);
		for ($i=$awal; $i<=$akhir; $i+=86400) 
		{  
    		echo date("Y-m-d", $i).'<br />';  
		} 
 	}
 betweenDays('2018-11-01','2018-11-05')
 ?>