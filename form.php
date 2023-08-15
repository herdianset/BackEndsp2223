<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        <label for="bil1">Bilangan 1 :</label><br>
        <input type="number" name="bil1"> <br>
        <label for="bil1">Bilangan 2 : </label><br>
        <input type="number" name="bil2"> <br><br>
        <input type="submit" name="op" value="jumlah">
        <input type="submit" name="op" value="kurang">
        <input type="submit" name="op" value="kali">
        <input type="submit" name="op" value="bagi">
    </form>
    <?php 
    if(isset($_POST['op'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $op = $_POST['op'];

        switch($op){
            case "jumlah" :
                $hasil = $bil1 + $bil2;
                break;
            case "kurang" :
                $hasil = $bil1 - $bil2;
                break;
            case "kali" :
                $hasil = $bil1 * $bil2;
                break;
            case "bagi" :
                $hasil = $bil1 / $bil2;
            default :
                $hasil = "Operator tidak ada yang cocok";
        }

        echo $hasil;
    }
       
    ?>
</body>
</html>