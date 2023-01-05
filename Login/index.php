<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman user</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Rumah Game</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#home">Game</a></li>
                    <li><a href="../Login/profil/profil.php">Profil</a></li>
                    <li><a href="logout.php" class="tbl-biru">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img class="img" src="https://i.pinimg.com/originals/80/34/f5/8034f5707edb6b1cf0727456e9a9f5c9.png"/>
            <div class="kolom">
                <p class="deskripsi">"Kegagalan bukan berarti game over,<br> Itu berarti coba lagi dengan pengalaman yang sudah ada."</p>
                <h2>Tetap Semangat!</h2>
                <p>"Tugas Uas!"</p>
            </div>
        </section>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>LaluAwik!</b> 
        </div>
    </div>
</body>
</html>