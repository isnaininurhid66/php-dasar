<?php
$counter = 1;

while ($counter <= 10) {  // Increment
    echo "Ini adalah While loop ke = ".$counter. PHP_EOL;  
$counter++;

}

$counter = 1;
while ($counter <= 10) :  // Increment
    echo "Ini adalah While loop ke = ".$counter. PHP_EOL;  
$counter++;

endwhile; // Alternatif Syntax