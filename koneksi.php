<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_sekolah";

    $conn  = mysqli_connect($servername, $username, $password, $dbname);
    $koneksi = mysqli_connect($servername, $username, $password, $dbname);
    
    $tb_siswa = "SELECT * FROM tb_siswa ORDER BY id_siswa DESC";
    $result = mysqli_query($koneksi, $tb_siswa);

    $sql = "SELECT * FROM tb_siswa";
    $query = mysqli_query($koneksi, $sql);
    $no = 1;
    
    //$mage = mysqli_query($koneksi, $query);

    if ($conn->connect_error) {
        echo 'Koneksi gagal '. $conn->connect_error;
    }
     echo "Koneksi berhasil";




?>


    
    