<?php
$k = 5;
	$arreglo = null;
	for ($i=0; $i < 200; $i++) {
		if ($i == 0 || $i == 1) {
		//	echo $k."<br>";
			$arreglo[] = $k;
			$k++;
		}else{
			$k+=2;
			$arreglo[] = $k;
			$k++;
		}
	}
	foreach ($arreglo as $key => $value) {
				print_r("En la posicion&nbsp;".$key."&nbsp;esta el numero&nbsp;".$value."<br>");
			}
	/*$a = array('0' => "H",
				'1' => "O",
				'2' => "L",
				'3' => "A",);
	foreach ($a as $key => $value) {
		print_r($value);
	}*/
?>