<?php

function tampilUser()
{
	global $conn;

	$query = "SELECT * FROM user";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function detailUser($idUser)
{
	global $conn;

	$query = "SELECT * FROM user WHERE id = '$idUser' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}

function hapusUser($idUser)
{
	global $conn; 

	$query = "DELETE FROM user WHERE id = '$idUser' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}


function cekPunyaKomen($idUser)
{
	global $conn;
	$query = "SELECT * FROM user WHERE user_role = '$idUser' ";
	$res   = mysqli_query($conn,$query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusUser($idUser);
	} else {
		hapusUser($idUser);
	}


}


?>