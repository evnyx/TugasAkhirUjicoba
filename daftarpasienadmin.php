<?php
    session_start();

    if(!isset($_SESSION["login"]))
    {
        echo $_SESSION["login"];
        header("Location:login.php");
        exit;
    }

    require 'functions.php';
    $pasien=query(" SELECT * FROM pasien");

    if(isset($_POST["cari"]))
    {
        $pasien=cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>Daftar Pasien</title>
        <style>
            .divider500{
                width:600px;
                height:auto;
                display:inline-block;
            }
            .divider10{
                width:10px;
                height:auto;
                display:inline-block;
            }
        </style>
    </head>
    <body>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="daftarpasienadmin.php">Daftar Pasien</a>
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

        <br><br>
        
        <div class="container">
            <h2>Daftar Pasien</h2>
            <form action="" method="post">
                <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
                <button type="submit" name=cari> Cari </button>
                <div class="divider500"></div>
                <input type="button" value="Tambah Data Pasien" onclick="window.location.href='tambah_data.php'">
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Golongan Darah</th>
                        <th>Jenis Pasien</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php foreach($pasien as $row):?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["NIK"]; ?></td>
                        <td><?= $row["Nama"]; ?></td>
                        <td><?= $row["JenisKelamin"]; ?></td>
                        <td><?= $row["Alamat"]; ?></td>
                        <td><?= $row["GolonganDarah"]; ?></td>
                        <td><?= $row["JenisPasien"]; ?></td>
                        <td><img src="image/<?php echo $row["Gambar"]; ?>"alt="" height="100" width="100" srcset=""></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
                            <br>
                            <a href="hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </body>
    </html>
