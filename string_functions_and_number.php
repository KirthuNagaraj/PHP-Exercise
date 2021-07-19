<?php

	/** String Functions */
	$data = "Ammu kiruthiga nagaraj";
	echo strtolower($data)."<br>";
	echo strtoupper($data)."<br>";
	echo ucfirst($data)."<br>";
	echo ucwords($data)."<br>";
	echo strlen($data)."<br>";
	echo str_replace('nagaraj', 'rajesh', $data)."<br>";
	echo str_replace(' ', '', $data)."<br>";
	echo str_word_count($data)."<br>";
	echo str_repeat($data, 10)."<br>";


	/** Numbers */
	$a = 10; 
	$b = 12;
	$c = 1;
	// $c = $c+$a
	echo $c+=$a; 
	echo "<br>";
	// $c = $c+$a
	echo $b-=$a;
	echo "<br>";

	echo $a++; //Post Increment
	echo "<br>";

	echo ++$a;//Pre increment
	echo "<br>";
	echo ++$b;
	echo "<br>";

	echo --$a; //pre decrement
	echo "<br>";

	echo $a--; //post decrement
	echo "<br>";
	echo $a;


?>