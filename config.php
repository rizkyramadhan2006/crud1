<?php
$server             ="localhost";
$user               ="root";
$password           ="";
$namadatabase       ="schoollll";

$db = mysqli_connect($server, $user, $password, $namadatabase);

if( !$db ){
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
?>