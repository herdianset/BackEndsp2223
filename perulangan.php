<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contoh perulangan</h2>

    <?php
        for($i=1; $i <= 5; $i++){
            echo $i . "<br>";
        }

        $i=1;
        while($i <= 5){
            echo $i . "<br>";
            $i++;
        }

        $data = array("satu","dua","tiga", "empat");
        $data2 = ["satu","dua","tiga"];

        for($i=0; $i < count($data); $i++){
            echo $data[$i] . "<br>";
        }

        foreach($data as $key => $value){
            echo "Key : " . $key . "Value : ". $value . "<br>";
        }

        for($i=1; $i <= 10; $i++){
            //membuat kondisi untuk menentukan bilangan ganjil/genap
            if($i % 2 == 0){
                echo $i . "<span style='color:black'> Adalah bilangan genap </span> <br>";
            }else{
                echo $i . "<span style='color:red'> Adalah bilangan ganjil </span> <br>";
            }
        }
        
        
    ?>
</body>
</html>