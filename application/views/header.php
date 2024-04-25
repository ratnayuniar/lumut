
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Yii Aplication</title>
    <style>
        .topnav {
        background-color: #333;
        overflow: hidden;
        }

        
        .topnav a {
        float: right;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
        }

        #judul {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 70px;
        text-decoration: none;
        font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
        background-color: #ddd;
        color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
        background-color: #04AA6D;
        color: white;
        }
    </style>
</head>
<body>
<div class="topnav">
  <a id="judul" href="#home">My Application</a>
  <a href="#about">Login</a>
  <a href="<?php echo site_url('Akun') ?>">Akun</a>
  <a href="<?php echo site_url('Post') ?>">Post</a>
  <a href="<?php echo site_url('Beranda') ?>">Beranda</a>
</div>
    
</body>
</html>