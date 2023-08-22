<?php

$username = $_POST['username'];
$pwd = $_POST['pswd'];

include "koneksi.php";

$qry = mysqli_query($con,"SELECT * FROM user WHERE 
                        username = '$username' AND password = '$pwd'");
$data = mysqli_fetch_assoc($qry);
if($data){
    //berikan akses login
    session_start();
    $_SESSION['username'] = $data['username'];
    echo "<script>alert('Login berhasil'); window.location = 'home.php';</script>";
}else{
    //tolak akses login
    echo "<script>alert('Login Gagal, Cek username dan password'); 
    window.location = 'login.php';</script>";

}