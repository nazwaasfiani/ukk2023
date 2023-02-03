<?php

session_start();

if(!isset($_SESSION['nama_lengkap'])){
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .box{
            height: 262px;
            width: 1110; 
        }
    </style>
</head>
<body style="background:black">
    <div class="container mt-5">
    <h1 class="text-white">PENGADUAN MASYARAKAT</h1>
    <h4 class="text-white">MASYARAKAT</h4>
    <div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link text-dark" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="masyarakat.php">DATA MASYARAKAT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="isi_data.php">Isi Data</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="logout.php">keluar</a>
      </li>
    </ul>
  </div>
</div>
<div class="container mt-3 text-center">
    <div class="box border border-light bg-white">
        <h4 class="mt-5">selamat datang </h4>
    </div>
</div>
<div class="text-end mt-3">
<a href="cp.php">
  <button class="btn btn-primary">isi data masyarakat</button>
</a>
</div>
</body>
</html>