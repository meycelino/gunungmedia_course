<?php
// pemanggilan koneksi
include "../config/koneksi.php";

//deklarasi variabel
$nama_lengkap = $_POST['nama_lengkap'];
$username     = $_POST['username'];
$password     = $_POST['password'];

//query insert
$sql = mysqli_query($koneksi, "INSERT into admin(nama_lengkap, 
                                                username, 
                                                password) VALUES 
                                                ('$nama_lengkap', 
                                                '$username', 
                                                '$password')");

    //fungsi logika
    if($sql){
        echo "<script> alert('Proses tambah admin berhasil'); window.location='admin.php';</script>";
    }else{
        echo "<script> alert('Proses tambah admin gagal'); history.back();</script>";
    }


?>