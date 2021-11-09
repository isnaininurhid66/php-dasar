<?php

echo 'Nama :';
echo 'Isnaini Nur Hidayat';
echo "\n";

echo "Nama :";
echo "Isnaini\t Nur\t Hidayat\n";

echo <<<NUR
Selamat belajar php, kita belajar tipe data dan kamu harus bisa, 
kamu harus giat belajar agar semua terasa mudah,
jangan menyerah apapun yang terjadi.
haredoc

NUR;

echo <<<'NUR'
Selamat belajar php, kita belajar tipe data dan kamu harus bisa, 
kamu harus giat belajar agar semua terasa mudah,
jangan menyerah apapun yang terjadi.
nowdoc

NUR;


?>