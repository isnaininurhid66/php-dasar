<?php

$a = 10;
$c = 15;

$b = $a++; // b = a; a = a+1; // POST INCREMENT
$b = ++$a; // b = a +1 ; b = a; // PRE INCREMENT
$d = --$c; // b = c -1 ; b = c; // PRE DECREMENT
$d = $c--; // b = c; c = c-1; // POST DECREMENT
var_dump($a);
var_dump($c);