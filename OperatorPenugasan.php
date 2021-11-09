<?php

$total = 50000;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;

$total += $fruit;
$total += $chicken;
$total += $orangeJuice; //Tambah
var_dump($total);

$total -= $fruit;
$total -= $chicken;   //Kurang
$total -= $orangeJuice;
var_dump($total);

$total *= $fruit;
$total *= $chicken;         //Kali
$total *= $orangeJuice;
var_dump($total);

$total /= $fruit;
$total /= $chicken;         //Bagi
$total /= $orangeJuice;
var_dump($total);

$total %= $fruit;
$total %= $chicken;     //Modulus
$total %= $orangeJuice;

var_dump($total);

?>