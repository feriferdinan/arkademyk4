<?php

function cetak_gambar($x){
	if($x % 2 == 1) {	
	for ($i= 0; $i < $x; $i++){
		for ($j= 0; $j < $x; $j++){
				$s = "x";
				$k = $x-1;
			if($i == $j){
				echo $s." ";
			}
			elseif ($k-$j == $i ){
				echo $s." ";
			}else{
				echo "= ";	
			}
		}
		echo " \n";
		}
	}else {
		echo "Harus Bilangan Ganjil!";
		
	}
}
cetak_gambar(7);

?>