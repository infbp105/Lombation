<?php

$conn = mysqli_connect('localhost','root','','lombati1_lombation');
if (!$conn) {
	echo "Koneksi Gagal";
}

include 'fungsi_user.php';
include 'fungsi-profile.php';
?>