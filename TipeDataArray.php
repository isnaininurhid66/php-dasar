<?php
$values = array(10, 9, 8, 7.5);
var_dump($values);


$names = ["Isnaini", "Nur", "Hidayat"];
var_dump($names);

var_dump($names[0]); // menampilkan araay 0

$names[0] = "Robert";
var_dump($names);

unset($names[1]); //menghapus array index ke 1

$names[] = "Tatang"; // menambah array
var_dump($names);

var_dump(count($names)); //menghitung isi array


$jono = array(
    "id" => "jono",
    "name" => "Jono Sujono",
    "age" => 23,
    "address"=> array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    
    )
);

var_dump($jono);
var_dump($jono["name"]);
var_dump($jono["address"]["country"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Halilintar",
    "age" => 24,
    "address"=> [
        "city" => "Jakarta",
        "country" => "Indonesia"

    ]
];

var_dump($budi);
var_dump($budi["address"]["city"]);

