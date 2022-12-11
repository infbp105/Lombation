<?php

function tampilProfile($idUser)
{
	global $conn;

	$query = "SELECT * FROM user WHERE user_role = '$idUser' ";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

?>