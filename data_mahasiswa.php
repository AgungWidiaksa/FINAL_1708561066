<?php
require 'php.php'; 
    $sort = "";
    if($sort == ""){
        $result = show();
    }
    if(isset($_POST['cari']) AND $_POST['filter']==""){
         echo '<script language="javascript">alert("Masukan Filter Search!"); document.location="data_mahasiswa.php";</script>';
    }
    if (isset($_POST["submit"]) AND isset($_POST['filter']) AND isset($_POST["sort"])){
        $sort =  $_POST["sort"]; 
        $filter  = $_POST['filter'];
        $result = sorting($filter, $sort);        
    }
    if(isset($_POST['submit']) AND isset($_POST['cari']) AND isset($_POST['filter']) AND isset($_POST["sort"])){
        $cari = $_POST['cari'];
        $filter  = $_POST['filter'];
        $sort =  $_POST["sort"]; 
        $result = carifiltersort($cari,$filter, $sort);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sorting dan Filter Simak</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2 align="center">Sorting dan Filter SIMAK</h2>
        </div>
        <div class="container">    
        <br>
        <form action="" method="POST">
            <label>Pencarian : </label><input type="text" placeholder="Cari..." name="cari"><p></p>
            
            <select class="select" name="filter"/>
                <option value="" hidden>Filter Search..</option>
                <option value="NIM">Filter By NIM</option>
                <option value="nama">Filter By Nama</option>
                <option value="email">Filter By No Telepon</option>
                <option value="agama">Filter By Agama</option>
                <option value="jenis_kelamin">Filter By Jenis Kelamin</option>
                <option value="tempat_lahir">Filter By Tempat Lahir</option>
                <option value="tanggal_lahir">Filter By Tanggal Lahir</option>
                <option value="kota_asal">Filter By Kota Asal</option>
                <option value="fakultas">Filter By Fakultas</option>
                <option value="jurusan">Filter By Jurusan</option>
                <option value="deskripsi">Filter By Deskripsi</option>
                <option value="jenis_user">Filter By Jenis User</option>
            </select>

            <select class="select" name="sort"/>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
            </select>
            <input type="submit" value="OK" name="submit">
            <a href="data_mahasiswa.php"><input type="button" value="Kembali" name="kembali"></a><p></p>
        </form>
        <table class='tabel' border='1' cellpadding='16' align='center'>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kota_Asal</th>
                <th>Fakultas</th>
                <th>Jurusan</th>
                <th>Deskripsi</th>
                <th>Jenis User</th>
            </tr>
            <?php $no=1;
                while($data = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['NIM']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['tempat_lahir']; ?></td>
                    <td><?php echo $data['tanggal_lahir']; ?></td>
                    <td><?php echo $data['kota_asal']; ?></td>
                    <td><?php echo $data['fakultas']; ?></td>
                    <td><?php echo $data['jurusan']; ?></td>
                    <td><?php echo $data['deskripsi']; ?></td>
                    <td><?php echo $data['jenis_user']; ?></td>
                </tr>
            <?php $no++;
            endwhile;?>
        </table>
        </div>
    </body>
</html>
