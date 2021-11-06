<?php
// if, if-else, switch
// random a number from 0 to 10
$number = rand(0, 10);

if($number % 2 == 0){
    echo "$number is even" . PHP_EOL;
} else {
    echo "$number is odd" . PHP_EOL;
}
// random a month from 1-12
$month = rand(1,12);
switch($month){
    case 1:
        echo "Jan";
        break;
    case 2:
        echo "Feb";
        break;
    case 3:
        echo "Mar";
        break;
    case 4:
        echo "Apr";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "Jun";
        break;
    case 7:
        echo "Jul";
        break;
    case 8:
        echo "Aug";
        break;
    case 9:
        echo "Sep";
        break;
    case 10:
        echo "Oct";
        break;
    case 11:
        echo "Nov";
        break;
    case 12:
        echo "Dec";
        break;
}
echo "".PHP_EOL;
// falsy
$false = FALSE;
$FALSE = false;
$number_0 = 0;
$empty_string = '';
$empty_array = array();
$empty_object = new Exception();
$null = NULL;
if($false == FALSE){
    echo 'false is falsy!' . PHP_EOL;
}
if($FALSE == FALSE){
    echo 'FALSE is falsy!' . PHP_EOL;
}
if($number_0 == FALSE){
    echo '0 is falsy!' . PHP_EOL;   
}
if($empty_string == FALSE){
    echo 'empty_string is falsy!' . PHP_EOL;      
}
if($empty_array == FALSE){
    echo 'empty_array is falsy!' . PHP_EOL;         
}
if($null == FALSE){
    echo 'NULL is falsy!' . PHP_EOL;
}
if($empty_object !== FALSE){
    echo 'empty_object is not falsy!' . PHP_EOL;            
}

if(!$empty_array){
    echo 'empty_array is falsy!' . PHP_EOL;            
}
if(@$undefined){
    // @ : ignore error
    echo 'undefined is falsy!' . PHP_EOL;               
}