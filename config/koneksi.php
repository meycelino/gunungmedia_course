<?php 

//definisi koneksi database
$server     = "localhost";
$username   = "root";
$password   = "";
$database   = "db_gunungmedia";

//koneksi dan memilih database di server
$koneksi    = mysqli_connect($server, $username, $password, $database);

//cek koneksi
if(mysqli_connect_errno()) {
    echo "Koneksi database gagal ! : " . mysqli_connect_error();
}

?>
