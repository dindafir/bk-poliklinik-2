<?php 
    $dbhost = 'localhost';
    $dbname = 'bk-poliklinik';
    $dbusername = 'root';
    $dbpassword = '';

    $connect = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

    if (!$connect) {
        die('Koneksi ke database gagal: ' . mysqli_connect_error());
    }
?>