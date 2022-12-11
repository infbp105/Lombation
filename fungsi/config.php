<?php


$host = "localhost";
$user = "root";
$pass = "";
$db   = "lombati1_lombation";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
	echo "Koneksi Gagal";
}

include 'fungsi_lomba.php';
include 'fungsi_komentar.php';