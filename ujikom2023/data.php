<?php

session_start();

$tgl_pengaduan=$_POST['tgl_pengaduan'];
$isi_laporan=$_POST['isi_laporan'];
$foto=$_POST['foto'];
$status='0';
$nik=$_SESSION['nik'];
// echo $_SESSION['nik'];
// echo $nik;
// die();
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $koneksi->query("INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES('', '$tgl_pengaduan', '$nik', '$isi_laporan', '$foto', '$status')");

 if($query){
    header ("location:masyarakat.php");
 }