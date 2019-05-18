<?php 
$data = ["h","g","a","b","d","f"];
$datalain = ["a","b","c","d"];

function minmax($array){
	$min = (min($array)); 
	$max = (end($array));
	$result[] = $min;
	$result[] = $max;
	echo json_encode($result);
}

minmax($data);
minmax($datalain);

 ?>