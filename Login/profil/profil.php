<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require '../functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Profil</title>
</head>
<body>
    <div class="main">
        <div class="img"></div>
        <h1>Lalu Muhamad Alawi Arrozi</h1>
        <div class="text">Mahasiswa Universitas Widyagama Malang</div>
        <p>Saya di Universitas Widyagama Malang mengambil jurusan Teknik Informatika
            dan sekarang saya lagi menempuh semester 5.
        </p>
        <ul>
            <li><a href="#"><img src="fb.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="tw.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="ig.png" width="25px" height="25px"></a></li>
            <li><a href="#"><img src="link.png" width="25px" height="25px"></a></li>
        </ul>
    </div>
</body>
</html>