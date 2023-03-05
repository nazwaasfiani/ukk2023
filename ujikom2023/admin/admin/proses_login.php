<?php
session_start();
require 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $db->query("SELECT * FROM petugas WHERE username='$username' AND password='$password'");
$data=$query->fetch();
// echo $query->rowCount();
// die();
if($query->rowCount()>0){
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    $_SESSION['id_petugas']=$data['id_petugas'];
    header("location:index.php");
    // die('berhasil');
    }else{
        // die('gagal');
        header("location:login.php");

    }
    ?>