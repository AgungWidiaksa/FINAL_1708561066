<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universitas Udayana - Contact Me </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
</head>
<body <?php session_start(); 
            echo ($_SESSION['jenis_user']!='Admin') ? "style='background-color: #e8f0fe'" : "style='background-color: #aeff90'"; ?>>
    <div id="head">
        <div id="gambarutama">
            <img src="gambar/udayana.jpg" alt="">
        </div>
        <div id="content1">
            <div id="logo">
                <img src="gambar/logo.png" alt="">
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
            <h1 class="h1content2">Kontak Kami</h1>
            <nav class="kontak">
                <ul>
                    <li>Alamat :</li>
                    <li>Phone :</li>
                </ul>
                <ul>
                    <li>Kampus Bukit, Jl. Raya Kampus Unud Jimbaran,Kuta Sel,Badung,Bali 80361</li>
                    <li>(0361) 701954</li>        
                </ul>
            </nav>
        </div>
        <div id="clear"></div>
        <div id="end">
            <p>Copyright © Widiaksa, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>