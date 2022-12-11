<?php

function jumlahKomentar($idLomba)
{
	global $conn;

	$query = "SELECT * FROM komentar WHERE lomba = '$idLomba' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_num_rows($res);

	return $row;
}

function tampilKomentar($idLomba)
{
	global $conn;

	$query = "SELECT * FROM komentar WHERE lomba = '$idLomba' ";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function postKomentar($data, $idLomba)
{
	global $conn;

	$nama  = $data['nama'];
	$deskripsi   = $data['deskripsi'];

	$query = "INSERT INTO komentar VALUES ('', '$idLomba', '$nama', '$deskripsi') ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}

