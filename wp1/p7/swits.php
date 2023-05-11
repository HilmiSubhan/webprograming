<?php
$angka = 6;
switch ($angka) {
  	case 0:
  		$terbilang = 'Nol';
  		break;
  	case 1:
  		$terbilang = 'satu';
  		break;
  	case 2:
  		$terbilang = 'dua';
  		break;
  	case 3:
  		$terbilang = 'tiga';
  		break;
  	case 4:
  		$terbilang = 'empat';
  		break;
  	case 5:
  		$terbilang = 'lima';
  		break;
  	case 6:
  		$terbilang = 'enam';
  		break;
  	case 7:
  		$terbilang = 'tujuh';
  		break;
  	case 8:
  		$terbilang = 'delapan';
  		break;
  	case 9:
  		$terbilang = 'sembilan';
  		break;
  	
  	default:
  		$terbilang = 'salah input';
  		break;
  } 
  echo "bentuk terbilang dari $angka adalah $terbilang"; 
?>