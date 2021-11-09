<?php
// union $a + $b =========> Menggabungkan array $a dan $b
// equality $a == $b =========> true jika $a dan $b memiliki key-value sama
// identity $a === $b =========> true jika $a dan $b memiliki key-value sama posisi sama
// inequality $a != $b =========> true jika $a dan $b tidak sama
// inequality $a <> $b =========> true jika $a dan $b tidak sama
// nonidentity $a !== $b =========> true jika $a dan $b tidak identik

$first = [
    "first_name" => "Isnaini"
];

$last = [
    "first_name" => "Isnaini",
    "last_name" => "Nur Hidayat"

];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Isnaini",
    "last_name" => "Nur Hidayat"
];

$b = [
    "last_name" => "Nur Hidayat",
    "first_name" => "Isnaini"

];

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);
?>