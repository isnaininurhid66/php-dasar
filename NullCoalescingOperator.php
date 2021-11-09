<?php
$data = [];

if (isset($data["action"])){    /// Mengunakan isset
    $action = $data["action"];
} else {
    $action = "Nothing" ;
}

echo $action . PHP_EOL;

$data = [];
$action = $data["action"] ?? "Nothing"; //jika data ada maka akan tampil, jika tidak ada maka Nothing
echo $action . PHP_EOL;