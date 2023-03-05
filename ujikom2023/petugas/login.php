<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$data=$query->fetch();

if($query->rowCount()>0){
    $_SESSION['username']=$username;
    $_SESSION['status']="login";
    header("location:home_petugas.php");
    
    }else{
        header("location:loginf.php");
    }