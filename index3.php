<?php

// Percabangan
// if
// if else
// if else.. if else 
// switch case

$angka = 20;

if ($angka % 2 === 0){
    echo "$angka = Ini bilangan genap ";
} else {
    echo "$angka merupakan bilangan ganjil";
} 


//if else.. if else..
echo "<br>";
$nilai = 78;

if($nilai > 85) {
    echo "Index nilai anda adalah A";
} else if ($nilai > 75 && $nilai <= 85) {
    echo "Index nilai anda adalah B";
} else if ($nilai > 60 && $nilai <= 75) {
    echo "Index nilai anda adalah C";
} else if ($nilai > 45 && $nilai <= 60) {
    echo "Index nilai anda adalah D";
} else {
    echo "Index anda adalah E";
}
echo "<br>";

switch ($nilai) {
    case ($nilai > 85):
        echo "Index nilai anda adalah A";
        break;
    case ($nilai > 75 && $nilai <=85):
        echo "Index nilai anda adalah B";
        break;
    case ($nilai > 60 && $nilai <=75):
        echo "Index nilai anda adalah c";
        break;
    case ($nilai > 45 && $nilai <=60):
        echo "Index nilai anda adalah D";
        break;
    case ($nilai <= 45):
        echo "Index nilai anda adalah E";
        break;
        default;
        echo "Nilai yang anda input tidak valid "
}
?>

