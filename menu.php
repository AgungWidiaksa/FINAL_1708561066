<?php
session_start();
 $conn = mysqli_connect("localhost","root","","praktikum") or die(mysqli_error());
    if($_SESSION['status'] === "login"){
        $nama = $_SESSION['nama'];
        $level = $_SESSION['jenis_user'];
    }
    else {
        echo "<script>alert('You have to login...!'); document.location='index.php';</script>";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universitas Udayana</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body <?php echo ($_SESSION['jenis_user']!='Mahasiswa') ? "style='background-color: #e8f0fe'" : "style='background-color: #aeff90'"; ?>>
    <div id="head">
        <div id="gambarutama">
            <img src="gambar/udayana.jpg" alt="udayana">
        </div>
        <div id="content1">
            <div id="logo">
                <img src="gambar/logo.png" alt="udayana1">
            </div>
            <div id="artikel">
                <p>Artikel</p>
            </div> 
            <div id="artikellist">
                <ul>
                    <li><a href="#">Corona di Bali</a></li>
                    <li><a href="#">UNUD Lawan Corona</a></li>
                    <li><a href="#">Pariwisata di bali setelah Corona</a></li>
                    <li><a href="#">Karya Informatika UNUD atasi Corona</a></li>
                </ul>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="menu.php">Beranda</a></li>
                <li><a href="sejarah.php">Sejarah Udayana</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="data_mahasiswa.php">Data Mahasiswa</a></li>
                <li><a href="data_dosen.php">Data Dosen</a></li>
                <li><a href="logout.php" style="color:red;">Logout</a></li>
            </ul>
        </div>
        <div id="content2">
            <h1 class="h1content2">Selamat Datang <span <?php echo ($_SESSION['jenis_user']!='Admin') ? "style='color: #4183D7'" : "style='color: #008000'"; ?> ><?= $_SESSION['nama'] ?></span> di Website Universitas Udayana</h1><br>
            <span class="sub-title"> (anda login sebagai : <b><?= $_SESSION['jenis_user'] ?></b>)</span>
            <p class="pcontent2">Berhubung virus Covid-19 kini sudah menyebar di berbagai tempat di Bali, diharapkan segala civitas Universitas Udayana agar tetap beraktivitas di rumah masing-masing.</p>
            <h1 class="h1content2">Dokumentasi</h1>
            <div class = "gambar">
                <img src="#" alt="">
            </div>
            <div class = "gambar">
                <img src="#" alt="">
            </div>
            
            <div class = "gambar">
                <img src="#" alt="">
            </div>
        </div>
        <div id="clear"></div>
        <div id="end">
            <p>Copyright © Widiaksa, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>h