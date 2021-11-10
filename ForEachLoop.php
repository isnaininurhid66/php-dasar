<?php

$names = ["Isnaini" ,"Nur", "Hidayat"]; // inget ini array nya...

for ($i = 0; $i < count($names); $i++) { // Jika Tanpa For Each
    echo "Hello $names[$i]" . PHP_EOL;
}


foreach ($names as $names) {    //Ini Menggunkan For Each
    echo "Hello $names" . PHP_EOL;
}

$person = [
    "first_name" => "Isnaini",  // ini array ya jangan lupa
    "middle_name" => "Nur",
    "last_name" => "Hidayat"
];

foreach ($person as $key => $value) { //Ini Menggunakan For Each dengan Key
    echo "$key : $value" . PHP_EOL;
}