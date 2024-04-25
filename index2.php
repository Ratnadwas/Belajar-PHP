<?php
// php di dalam html


// cara membuat variabel di php
// variabel php = $angka
// scope = cangkupan
// variabel global $$ variabel local 
// variabel global = variabel yang busa di akses di mana saja 
// variabel local = variabel yang hanya bisa di akses di bagian tertentu

$angka = 20;
echo $angka;
echo "<br>";

$nama = "Ratna Dwi Astuti";
echo $nama;
echo "<br>";

// concatenatio -> menggabungkan string
$nama_depan = "buddi";
$nama_belakang = "utomo";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";
// operator aritmatika ( +, -, /, *, %)
// operator assignment ( +=, -=, *=, /=)
// operator perbandingan (<, >, <=, >=)

var_dump(1 == "1");

// tipe data di php = integer, float, string, bolean.
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo "SELAMAT DATANG " . $nama ?>
    </h1>

    <?php
    // atau bisa juga mengeluarkan output dengan 
    /*
     <h1>
        <?php echo "SELAMAT DATANG $nama" ?>
    </h1>
    */
    ?>
</body>
</html>