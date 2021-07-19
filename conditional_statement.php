<?php
 $a=8;
 if($a>=6 && $a<=11)
 {
 	$b='Good Morning';
 }
 else if($a>=12 && $a<=16){
 	$b='Good Afternoon';	 	
 }
 else if($a>=17 && $a<=19){
 	$b='Good Evening';	
 }
 else if($a>=20 && $a<=22){
 	$b='Good Night';	
 }
 else{
 	$b='Enter Valid Time';
 }
 switch($a){
 	case 8:
 	$b=$b."It's time 8'o' clock. Go and have your breakfast";
 	echo $b;
	break;
 	case '13':
 	$b=$b."It's time 1'o' clock. Go and have your lunch";
 	echo $b;
 	break;
 	case '21':
 	$b=$b."It's time 8'o' clock. Go and have your dinner";
 	echo $b;
 	break;
 	default:
 	echo $b;
		
 }
?>