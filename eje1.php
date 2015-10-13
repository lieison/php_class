<?php
	/*$k = 5;
	for ($i=0; $i < 200; $i++) {

		switch($i){
			case 0:
			break;
			case 1:
				$k++;
				break;
		default:
		$k += 3;
				break;
		}
		echo $k."<br>";
	}*/
	$k = 5;
	for ($i=0; $i < 200; $i++) {
		if ($i == 0 || $i == 1) {
			echo $k."<br>";
			$k++;
		}else{
			$k+=2;
			echo $k."<br>";
			$k++;
		}
	}
?>