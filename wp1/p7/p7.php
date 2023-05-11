<?php
	//input
	$nilai	= 40;
	$keterangan = '';

	//proses
	if ($nilai <= 0)
		{$keterangan = "nilai tidak bisa di proses";}
	elseif($nilai >=60){
		$keterangan = "Lulus";
	}
	else{
		$keterangan = "tidak Lulus";
	}
	//output
	echo "nilai anda = $nilai dengan keterangan = $keterangan"
 ?>