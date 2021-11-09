<?php
$counter = 1;

for ( ; $counter <= 10 ; ) {
    echo "Ini adalah For loop ke-$counter". PHP_EOL; // Normal
    $counter++;
}


for ($counter = 1; $counter <= 10 ; ) {
    echo "Ini adalah For loop ke = ".$counter. PHP_EOL;      // Init Statement
    $counter++;
}

for ($counter = 1; $counter <= 10 ; $counter++) {  // Increment
    echo "Ini adalah For loop ke = ".$counter. PHP_EOL;      // Post Statement // "lebih simple"

}

for ($counter = 10; $counter >= 1 ; $counter--) {  // Decrement
    echo "Ini adalah For loop ke = ".$counter. PHP_EOL;      // Post Statement // "lebih simple"

}

for ($counter = 1; $counter <= 10 ; $counter++) :  // Increment
    echo "Ini adalah For loop ke = ".$counter. PHP_EOL;      // Post Statement // "lebih simple"

endfor; // Alternatif Syntax