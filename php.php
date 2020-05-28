<?php 
$conn = mysqli_connect("localhost","root","","praktikum") or die(mysqli_error());
$result = mysqli_query($conn, "SELECT * FROM data WHERE jenis_user = 'Mahasiswa'");
$res = mysqli_query($conn, "SELECT * FROM data WHERE jenis_user = 'Dosen'");

    
    function show(){
        global $result; 
        return $result;       
    }
    function sorting($filter, $sort){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM data WHERE jenis_user = 'Mahasiswa' ORDER BY $filter $sort");
        return $result;
    }
    function carifiltersort($cari,$filter, $sort){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM data WHERE $filter LIKE '%$cari%' and jenis_user ='Mahasiswa' ORDER BY $filter $sort");
        return $result;
    }


    function show1(){
        global $res; 
        return $res;       
    }
    function sorting1($filter, $sort){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM data WHERE jenis_user = 'Dosen' ORDER BY $filter $sort");
        return $result;
    }
    function carifiltersort1($cari,$filter, $sort){
        global $conn;
        $result = mysqli_query($conn, "SELECT * FROM data WHERE $filter LIKE '%$cari%' and jenis_user ='Dosen' ORDER BY $filter $sort");
        return $result;
    }
?>