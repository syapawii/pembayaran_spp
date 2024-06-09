<?php

$koneksi = mysqli_connect('localhost','root','','db_spp');

if(!$koneksi) {
    echo"Yah... Koneksi Kamu Gagal!!!";
}

?>