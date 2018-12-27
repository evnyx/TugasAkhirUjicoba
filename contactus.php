<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kontak Kami</title>

        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <style>
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
                    <li class="nav-item active">
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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrasi.php">Registrasi</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <br>
                        <h1 class="h1">
                            Hubungi Kami
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Surel</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan Alamat Surel" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                        Subject</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Pilih:</option>
                                        <option value="service">Customer Service</option>
                                        <option value="suggestions">Saran</option>
                                        <option value="product">Bantuan Product</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Pesan</label>
                                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Pesan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Kirim Pesan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Lokasi RSUD Kabupaten Jombang</legend>
            <address>
                <strong>Alamat.</strong><br>
                Kepanjen, Jl. KH. Wahid Hasyim No.52, Kepanjen,<br>
                Kec. Jombang, Kabupaten Jombang, Jawa Timur 61416<br>
                <abbr title="Phone">
                    Telepon : 
                </abbr>
                    (0321) 863502
                </address>
                <address>
                    <strong>Kontak Surel</strong><br>
                    <a href="mailto:humas@rsudjombang.com">humas@rsudjombang.com</a>
                </address>
                </form>
            </div>
        </div>
    </div>

    </body>
</html>