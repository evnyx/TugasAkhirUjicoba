<?php
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST['submit']))
    {


        if(edit($_POST)>0)
        {
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='daftarpasienadmin.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('data gagal diperbaharui');
                document.location.href='daftarpasienadmin.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
    $id=$_GET["id"];
    //var_dump($id);

    $pasien=query("SELECT * FROM pasien WHERE id=$id")[0];
    //var_dump($mhs[0]["Nama"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update data</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Hubungi Kami</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
            <a class="navbar-brand" href="index.php">
                <img src="image/logo.jpg" style="height:150%;">
            </a>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <br><br>
        <form class="form-horizontal" action="" method="POST">
            <input type="hidden" name="id" value="<?= $pasien["id"] ?>">
            <input type="hidden" name="GambarLama" value="<?= $pasien["Gambar"] ?>">
            
            <div class="form-group row">
                <label class="control-label col-sm-2" for="NIK">NIK:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="NIK" id="NIK" value="<?= $pasien["NIK"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $pasien["Nama"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="JenisKelamin">Jenis Kelamin (L/P):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" value="<?= $pasien["JenisKelamin"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $pasien["Alamat"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="GolonganDarah">Golongan Darah:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="GolonganDarah" id="GolonganDarah" value="<?= $pasien["GolonganDarah"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="JenisPasien">Jenis Pasien (Umum/Khusus):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="JenisPasien" id="JenisPasien" value="<?= $pasien["JenisPasien"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Gambar">Gambar:</label>
                <div class="col-sm-10">
                    <img src="image/<?= $pasien["Gambar"];?>" alt="" height="100" width="100"><br>
                    <input type="file" class="form-control" name="Gambar" id="Gambar">
                </div>
            </div>
            <div class="form-group row"> 
                <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Masukkan Data</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>