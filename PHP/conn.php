<?php

$host = "localhost";
$user = "falah";
$pass = "falah24";
$base = "mahasiswa";


$conn = mysqli_connect($host, $user, $pass, $base);

if (mysqli_connect_errno()) {
    die("Failed To Connect");
}