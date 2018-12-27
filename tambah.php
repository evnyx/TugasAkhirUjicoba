<?php

    $conn=mysqli_connect("localhost","root","","ikhlaashul");

    if(isset($_POST['submit']))
    {
        $nik=$_POST['NIK'];
        $nama=$_POST['Nama'];
        $jeniskelamin=$_POST['JenisKelamin'];
        $alamat=$_POST['Alamat'];
        $golongandarah=$_POST['GolonganDarah'];
        $jenispasien=$_POST['JenisPasien'];
        $gambar=$_POST['Gambar'];

        $query=" INSERT INTO pasien VALUES ('','$nik','$nama','$jeniskelamin','$alamat','$golongandarah','$jenispasien','$gambar')";
        mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn)>0){
            echo "
            <script>
                alert('data berhasil ditambah');
                document.location.href='daftarpasienadmin.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href='daftarpasienadmin.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
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
    <br><br><br><br>

    <div class="container">
        <form class="form-horizontal" action="" method="post">
            <div class="form-group row">
                <label class="control-label col-sm-2" for="NIK">NIK:</label>
                <div class="col-sm-5 ">
                    <input type="text" class="form-control" name="NIK" id="NIK" placeholder="Masukkan NIK Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Nama">Nama:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukkan Nama Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="JenisKelamin">Jenis Kelamin (L/P):</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" placeholder="Masukkan Jenis Kelamin Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Alamat">Alamat:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukkan Alamat Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="GolonganDarah">Golongan Darah:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="GolonganDarah" id="GolonganDarah" placeholder="Masukkan Golongan Darah Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="JenisPasien">Jenis Pasien (Umum/Khusus):</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="JenisPasien" id="JenisPasien" placeholder="Masukkan Jenis Pasien">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="Gambar">Gambar:</label>
                <div class="col-sm-5">
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