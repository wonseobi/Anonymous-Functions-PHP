<?php
    
$greet = function ($name){
    return "Hello, $name\n";
};

echo $greet("David");

$numbers = [1,2,3];
$squared_numbers = array_map(function ($n){
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared_numbers);

$message =  "Bye";
$greet2 = function ($name) use ($message){
    $message = $message . "!";
    return "$message, $name\n";
};

echo $greet2("David");
echo $message . "\n";

?>