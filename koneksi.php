<?php
    $nama_server = "localhost";
    $username = "root";
    $password = "";
    $nama_db = "11_PTSGANJIL2021_XIIRPL2_fadhilahalhadiid";

    $koneksi = mysqli_connect($nama_server,$username,$password,$nama_db);

    // if (!$koneksi) {
    //     die("koneksi gagal".mysqli_connect_errno());
    // }else{
    //     echo "koneksi berhasil";
    // }
?>