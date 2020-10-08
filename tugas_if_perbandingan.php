<?php
	$a=0;
	$b = 10;

	while($a<=10 && $b>=1){
		if($a > $b){
			echo "$a lebih besar dari $b<br>";
		}else if($a < $b){
			echo "$a lebih kecil dari $b<br>";
		}else if ($a ==$b){
			echo "$a sama dengan $b<br>";
		}else{
			echo "Tidak Valid";
		}
		$a++;
		$b--;
	}


?>

