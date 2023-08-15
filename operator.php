<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Operator</title>
</head>
<body>
    <?php
        echo "<h2>Latihan Operator pada PHP</h2> <br>";


        //operator aritmatika
        $x = 10;
        $y = 4;

        //operasi penjumlahan
        $jumlah = $x + $y;
        $kali = $x * $y;
        $kurang = $x - $y;
        $bagi = $x / $y;
        echo "Bilangan 1 : " . $x . " dan ";
        echo "Bilangan 2 : " . $y;

        echo "Penjumlahan " . $jumlah . "<br>";
        echo "Pengurangan " . $kurang . "<br>";
        echo "Perkalian " . $kali . "<br>";
        echo "Pembagian " . $bagi . "<br>";

        var_dump($x >= $y);
    ?>
    
</body>
</html>