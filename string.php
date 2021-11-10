<?php

$single_quote = 'single quote';
$name = 'PHP';
$double_quote = "$name is a great language";
$long_string = <<<LONGDOC
A multiline string
will look like this
and wrap in HEREDOC
LONGDOC;

echo $double_quote . PHP_EOL;

echo $long_string . PHP_EOL;


// string manipulation

/*
You are given a string and your task is to swap cases. 
In other words, convert all lowercase letters to uppercase letters and vice versa.

Eg: aBc => AbC

*/

// - https://www.php.net/manual/en/function.ctype-upper.php

// Search on this : https://www.php.net/manual/en/function.str-split

// Characters within strings may be accessed and modified by specifying the zero-based offset of the desired character after the string using square array brackets, as in $str[42]. Think of a string as an array of characters for this purpose

function swapCase(&$str){
	// split string into word
	for($i = 0; $i < strlen($str); $i++){
		// if the character is uppercase, convert to lowercase
		if(ctype_upper($str[$i])){
			$str[$i] = strtolower($str[$i]);
		}else{
			$str[$i] = strtoupper($str[$i]);
		}
		// and vice versa
	}
}

$tc001 = 'aBc';
$tc002 = 'Www.HackerRank.com';

swapCase($tc001);
swapCase($tc002);

echo $tc001 . PHP_EOL;
echo $tc002 . PHP_EOL;

// Explot : https://www.php.net/manual/en/function.explode
function splitFullName($fullname){
	$names = explode(" ",$fullname);
	$nameLength = count($names);

	$firstName = $names[$nameLength - 1];
	$lastName = $nameLength > 1 ? $names[0] : '';
	$middleName = '';
	for($i = 1; $i < count($names) - 1; $i++){
		if($i > 1){
			$middleName .= " {$names[$i]}";
		}else{
			$middleName .= "{$names[$i]}";
		}
	}
	$userName = array(
		"firstName" => $firstName,
		"lastName" => $lastName,
		"middleName" => $middleName
	);	
	var_dump($userName);
	return $userName;
}

splitFullName("Nguyễn Ánh");
splitFullName("Nguyễn Văn Toản");
splitFullName("Nguyễn Trần Việt Anh");

