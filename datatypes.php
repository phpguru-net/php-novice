<?php
$boolean = false;
$integer = 1;
$float = 1.2;
$string = "tada";
// file handle, database connection
$resource = fopen("README.md", 'r');
// array
$array = ['1'];
// object
$object = new Exception("tada");
// null
$null = null;
// unknown type

echo "PHP Datatypes:" . PHP_EOL;
echo gettype($boolean) . PHP_EOL;
echo gettype($integer) . PHP_EOL;
echo gettype($float) . PHP_EOL;
echo gettype($string) . PHP_EOL;
echo gettype($resource) . PHP_EOL;
echo gettype($array) . PHP_EOL;
echo gettype($object) . PHP_EOL;
echo gettype($null) . PHP_EOL;

fclose($resource);
echo gettype($resource) . PHP_EOL;