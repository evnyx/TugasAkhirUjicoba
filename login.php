<?php
    session_start();
    
    require 'functions.php';
    if(isset($_COOKIE['login']))
    {
        if($_COOKIE['login']=='true')
        {
            $_SESSION['login']=true;
        }
    }
    if(isset($_SESSION["login"]))
    {
        header("Location:daftarpasienadmin.php");
        exit;
    }
    if(isset($_POST["login"]))
    {
        $username=$_POST["username"];
        $password=md5($_POST["password"]);
        $result=mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

        if(mysqli_num_rows($result)===1)
        {
            $row=mysqli_fetch_assoc($result);

            if($password=$row['password'])
            {
                $_SESSION["login"]=true;

                if($row['level']=="admin"){
                    header("location:daftarpasienadmin.php");
                    exit;
                }else if($row['level']=="user"){
                    header("location:daftarpasienpelanggan.php");
                    exit;
                }
            }
        }
        $error=true;
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <style>
            .progress-bar {
                color: #333;
            } 
            {
                -webkit-box-sizing: border-box;
	            -moz-box-sizing: border-box;
	            box-sizing: border-box;
	            outline: none;
            }

            .form-control {
	            position: relative;
	            font-size: 16px;
	            height: auto;
	            padding: 10px;
		        @include box-sizing(border-box);

		        &:focus {
		            z-index: 2;
		        }
	        }
            body {
	            background-color: white;
            }

            .login-form {
	            margin-top: 200px;
            }

            form[role=login] {
	            color: #5d5d5d;
	            background: #f2f2f2;
	            padding: 26px;
	            border-radius: 10px;
	            -moz-border-radius: 10px;
	            -webkit-border-radius: 10px;
            }
            form[role=login] input,
            form[role=login] button {
                font-size: 18px;
                margin: 16px 0;
            }
            form[role=login] > div {
                text-align: center;
            }
            
            .form-links {
                text-align: center;
                margin-top: 1em;
                margin-bottom: 50px;
            }
            .form-links a {
                color: #fff;
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
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand" href="index.php">
                    <img src="image/logo.jpg" style="height:150%;">
                </a>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="daftarpasienadmin.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registrasi.php">Registrasi</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php if(isset($error)):?>
        <p style="color:red; font-style=bold">
            Username dan password salah</p>
        <?php endif?>

        <div class="container">
            <div class="row" id="pwd-container">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <section class="login-form">
                    <form method="post" action="" role="login">
                        <h1>Login</h1>
                        
                        <input type="text" name="username" placeholder="Username" required class="form-control input-lg" />
      
                        <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required="" />
          
                        <div class="pwstrength_viewport_progress"></div>
                        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
                    </form>
                </section>  
            </div>
            <div class="col-md-4"></div>
            </div>  
        </div>
    </body>
</html>