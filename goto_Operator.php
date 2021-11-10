<?php
goto a;
echo "Hello A". PHP_EOL;

a: 
echo "Heloo A" . PHP_EOL;


// goto Operator diLoop

$counter = 1;

while (true) {
    echo "While Loop $counter". PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop"; 