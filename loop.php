<?php

$array = [];

// for

for($i = 0; $i < 1e3; $i++){ // 1000
	$array [] = $i;
}

var_dump($array);

// while
$i = count($array);
while( $i>0 ){
	$i--;
	echo $i . PHP_EOL;
}

// foreach
foreach($array as $index => $value){
	echo $index . ':' . $value . PHP_EOL;
}

// foreach
foreach($array as $index => $value){
	if($index > 123){
		break;
	}
	if($index % 2 == 0){
		echo $index . ':' . $value . PHP_EOL;
	} else{
		continue;
	}
}