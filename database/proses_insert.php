<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$nama_foto = basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "koneksi.php";
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $qry = "INSERT INTO mahasiswa VALUES (
        '$nim',
        '$nama',
        '$jurusan',
        '$gender',
        '$alamat',
        '$no_hp',
        '$email',
        '$nama_foto'
        )";
        $exec = mysqli_query($con, $qry);
        if ($exec) {
            echo "<script>alert('Data berhasil disimpan'); 
        window.location='home.php';</script>";
        } else {
            echo "<script>alert('Data gagal disimpan'); 
        window.location='home.php';</script>";
        }
    }
} else {
    echo "<script>alert('Terjadi kesalahan, Data gagal disimpan'); 
        window.location='home.php';</script>";
}
