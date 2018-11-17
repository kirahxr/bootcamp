<?php

$var = 8;
for ($a = 0; $a < $var; $a++) {
	for ($b = 0; $b <= $a; $b++) {
		echo " ";
	}
	if ($a==0){
		for ($c=1; $c < $var*2; $c++) { 
			echo "*";
			if($c == ($var*2)-1){
				echo "\n";
			}
		}
	}else{
		echo "*";
		for ($d = 3; $d < ($var - $a)*2; $d++) { 
			echo " ";
		}
		if ($a==$var-1){
			echo "\n";
		}else{
			echo "*\n";
		}
	}	
}