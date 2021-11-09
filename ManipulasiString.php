<?php
$name = "Isnaini Nur Hidayat";

echo "Name : ".$name. PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


$valueString = (string)100;  // int to string
var_dump($valueString);

$valueInt = (int)"100"; //string to int
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

// Mengakses Karakter

$name = "Isnaini";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
echo $name[6] . PHP_EOL;

// Parsing Variable

echo "Hello" .$name . ",Selamat Belajar PHP". PHP_EOL;
echo "Hello $name ,Selamat Belajar PHP". PHP_EOL;

// Curly Brace

$var = "var";
echo "This is {$var}s" . PHP_EOL;
