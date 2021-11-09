<?php
$counter= 1;
while (true) {
    echo "Ini adalah Perulangan Ke = ". $counter. PHP_EOL;
    $counter++;

    if($counter >= 10){
        break;  // menghentikan semua perulangan
    }
}