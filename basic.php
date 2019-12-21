<?php
//Integer
$a = 300;

//Floating Number 
$f = 0.30;

//String
$s = "This is W0207";
$s = 'Ths is W0207';

//Boolean
$b = true;
$b = false;

//Array (PHP 5.4 below)
$array = array(
    "a", "b", "c"
);

//Array (PHP 5.4 above) (7.0+)
$array = ["a","b","c"];

//Indexed Array
//              0   1   2   3
$index_array = ["a","b","c","d"];
//extract "c"
$target_value = $index_array[2];
//extract "d"
$target_value = $index_array[3];
//replace "b" => "v"
$index_array[1] = "v";

//Associative Array (express object)
$assoc_array = [
    "peter" => 35,
    "ali"   => 23,
    "michael" => 10
];

//car
$car_array = [
    "brand" => "Honda",
    "model" => "Jazz",
    "cc"    => "1.5",
    "price" => 80000,
];

// indexed array vs associative array

// multidimensional array 
// indexarray has assoc array
$class = [
    ["name" => "Ali", "money" => 5],
    ["name" => "ahkau", "money" => 8],
];

//associative array index array
$car_array = [
    "brand" => "Honda",
    "model" => "Jazz",
    "cc"    => "1.5",
    "price" => 80000,
    "member" => ["ali","ahkau","michael"],
];

$car_array = array(
    "brand" => "Honda",
    "model" => "Jazz",
    "cc"    => "1.5",
    "price" => 80000,
    "member" => array("ali","ahkau","michael"),
);

//Operators (运算子)
// + - * /
// . (String concatenate)
// +

$a = 1;
$b = 2;
$c = $a + $b; // 3

$a = "This is apple";
$b = "This is pine";
$c = $a . " " . $b; // This is applethis is pine


// Expression  (IF)
$a = 150; 
$b = 200;
if($a > 100 || $b < 100) {
    echo "larger";
} else {
    echo "smaller";
}

//For / Foreach, Iteration
for($i=0; $i <= 100; $i++) {
    echo $i;
}

$car_array = [
    "brand" => "Honda",
    "model" => "Jazz",
    "cc"    => "1.5",
    "price" => 80000,
    "member" => ["ali","ahkau","michael"],
];

foreach($car_array as $k=>$v) {
    echo $k." ".$v;
}




echo count($class);//2

//debug
echo $class ; //string
//array?
print_r($class);
var_dump($class);


    //2019-12-15 11:26:00
echo date("Y-m-d H:i:s", time()+24*3600);
echo time();
//unix timestamp
//1970-01-01 00:00:00 until now seconds

//PHP Object

class Person {

}

$p = new Person();




?>

