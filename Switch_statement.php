<?php

$nilai = "B";
if ($nilai == "A") {
    echo "Anda lulus dengan sangat baik".PHP_EOL;
} elseif ($nilai == "B" || $nilai == "C") {
    echo "Anda lulus".PHP_EOL ;
}elseif ($nilai == "D") {
    echo "Anda tidak lulus".PHP_EOL;
}else {
    echo "Mungkin Anda salah jurusan".PHP_EOL;
}

switch ($nilai){  // lebih simple dan disarankan
    case "A":
        echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus".PHP_EOL;
        break;
    default:
    echo "Mungkin anda salah jurusan". PHP_EOL;
}

switch ($nilai):  // syntax alternatif
    case "A":
        echo "Anda lulus dengan sangat baik". PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus".PHP_EOL;
        break;
    default:
    echo "Mungkin anda salah jurusan". PHP_EOL;
    endswitch;