<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universitas Udayana - Tentang </title>
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
            <h1 class="h1content2">Tentang Universitas Udayana</h1>
            <p class="pcontent2">Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar. 
            Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.</p>
        </div>
        <div id="clear"></div>
        <div id="end">
            <p>Copyright © Widiaksa, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>