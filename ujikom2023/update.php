<?php

session_start();

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp= $_POST['telp'];

$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query = $db->query("UPDATE `masyarakat` SET `nik`='$nik',`nama`='$nama',
`username`='$username',`password`='$password',`telp`='telp' WHERE `nik`='$nik'");
 
if($query){
header ("location:masyarakat.php");
}