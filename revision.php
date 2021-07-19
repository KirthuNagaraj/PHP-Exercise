<?php
$a="I am Ammu";
$ammu=75.6597;
$dhivya= 5.5;
$ammu= $ammu-$dhivya;
echo $ammu."<br>";
echo round($ammu,2)."<br>";
echo floor($ammu)."<br>";
echo ceil($ammu)."<br>";
$a=str_replace("I am ", "", $a);
echo $a;
if(strtolower($a)=="ammu"){
	echo $ammu;
}
else{
	echo strlen($a)."<br>";
}
$b=[];
echo "<pre>";
print_r($b);
$b=array();
echo "<pre>";
print_r($b);
$c=array(5,6,array(1,2,3,4,5));
echo "<pre>";
print_r($c);
$c= [5,6,[1,2,3,4,5]];
echo "<pre>";
print_r($c);

?>