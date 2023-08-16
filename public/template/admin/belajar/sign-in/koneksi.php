<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "mw";

$koneksi = mysqli_connect($server, $user, $password, $database);
if (!$koneksi){
   die( "koneksi Gagal");
}

