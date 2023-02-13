<?php
$nik=$_GET["nik"];
$db = new PDO("mysql:host=localhost;dbname=pengaduanmasyarakat",'root','');
$query = $db->query("SELECT * FROM `masyarakat` WHERE `nik`='$nik'");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
</head>
<body style="background:#7895B2">
<body>
<div style="padding:50px;text-align:center;">
    <form action="update.php" method="POST">
    <div class="container mt-2">
    <h1 class="text-white"  style="font-family: 'Alfa Slab One', cursive;">masyarakat</h1>
        <div class="row" >
        <div class="col-md-6 offset-md-3">
        <div class="card my-6 text-white fw-bold" style="background-color:#blue;">
        <form class="card-body cardbody-color p-lg-4 text-white ">
            <br>
        <h3 class="text-white">Update</h3>
        <input type="hidden" name="nik" value="<?= $nik ?>">
        <div class="mb-3">
            <label>nik:</label><br>
            <input type="text" name="nik" class="form-control" style="width:300px;margin:auto" 
            value="<?= $data['nik'] ?>">
        </div>
        <div class="mb-3">
            <label>nama :</label><br>
            <input type="text" name="nama" class="form-control" style="width:300px;margin:auto" 
            value="<?= $data['nama'] ?>">
        </div>
        <div class="mb-3">
            <label>username :</label><br>
            <input type="text" name="username" class="form-control" style="width:300px;margin:auto" 
            value="<?= $data['username'] ?>">
        </div>
        <div class="mb-3">
            <label>password :</label><br>
            <input type="password" name="password" class="form-control" style="width:300px;margin:auto" 
            value="<?= $data['password'] ?>">
        </div>
        <br><input type="submit" value="update" style="width:200px;margin:auto" class="btn btn-success fw-bold"><br>
        </form>
</body>
</html>