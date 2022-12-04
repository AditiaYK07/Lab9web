<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "lab9";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
     echo "koneksi ke serveer gagal.";
     die();
} else
     #echo "koneksi sukses";
?>