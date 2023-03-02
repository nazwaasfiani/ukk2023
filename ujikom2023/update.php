<?php
include "koneksi.php";
$id= $_GET['id_pengaduan'];
$tgl_pengaduan = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];

$koneksi= new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat","root","");
$query = $koneksi->query("UPDATE `pengaduan` SET `id_pengaduan`='$id_pengaduan',`tgl_pengaduan`='tgl_pengaduan',
`nik`='$nik',`isi_laporan`='$isi_laporan',`foto`='$foto',`status`='$status' WHERE`id_pengaduan`='$id'");

if($query){
    header("Location:masyarakat.php");
}