<?php

function tampilLomba()
{
	global $conn;

	$query = "SELECT * FROM lomba";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}

function detailLomba($idLomba)
{
	global $conn;

	$query = "SELECT * FROM lomba WHERE id = '$idLomba' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}

function postLomba($data)
{
	global $conn;

	$penyedia = $data['penyedia'];
	$judul = $data['judul'];
	$deadline   = $data['deadline'];
	$bidang = $data['bidang'];
	$deskripsi   = $data['deskripsi'];
	
	$poster = upload();
	if (!$poster){
		return false;
	}
	
	$panduan = upload_panduan();
	if (!$panduan){
		return false;
	}
	
	$query = "INSERT INTO lomba VALUES ('', '$penyedia', '$judul', '$deadline', '$poster', '$panduan', '$bidang', '$deskripsi') ";
	
	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}

function upload(){
	$namaFile = $_FILES['poster']['name'];
	$ukuranFile = $_FILES['poster']['size'];
	$error = $_FILES['poster']['error'];
	$tmpName = $_FILES['poster']['tmp_name'];

	if($error===4){
		echo "<script>
				alert('pilih gambar anda terlebih dahulu');
				<script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar=strtolower(end($ekstensiGambar));
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
		echo "<script>
		alert('yang ada upload bukan gambar');
		<'script'>";
		return false;
	}

	if($ukuranFile>10000000){
		echo"<script>
		alert('ukuran gambar terlalu besar');
		<'script'>";
		return false;

	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar; 


	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	return $namaFileBaru;
}


function upload_panduan(){
	$namaFile_panduan = $_FILES['panduan']['name'];
	$ukuranFile_panduan = $_FILES['panduan']['size'];
	$error_panduan = $_FILES['panduan']['error'];
	$tmpName_panduan = $_FILES['panduan']['tmp_name'];

	if($error_panduan===4){
		echo "<script>
				alert('pilih pdf anda terlebih dahulu');
				<script>";
		return false;
	}

	$ekstensiGambarValid_panduan = ['jpg', 'jpeg', 'png', 'pdf'];
	$ekstensiGambar_panduan = explode('.', $namaFile_panduan);
	$ekstensiGambar_panduan=strtolower(end($ekstensiGambar_panduan));
	if(!in_array($ekstensiGambar_panduan, $ekstensiGambarValid_panduan)){
		echo "<script>
		alert('yang ada upload bukan gambar');
		<'script'>";
		return false;
	}

	if($ukuranFile_panduan>10000000){
		echo"<script>
		alert('ukuran gambar terlalu besar');
		<'script'>";
		return false;

	}

	$namaFileBaru_panduan = uniqid();
	$namaFileBaru_panduan .= '.';
	$namaFileBaru_panduan .= $ekstensiGambar_panduan; 


	move_uploaded_file($tmpName_panduan, 'pdf/' . $namaFileBaru_panduan);
	return $namaFileBaru_panduan;
}



function editLomba($data, $idLomba)
{
	global $conn;

	$penyedia = $data['penyedia'];
	$judul = $data['judul'];
	$deadline = $data['deadline'];
	$poster = $data['poster'];
	$panduan = $data['panduan'];
	$bidang = $data['bidang'];
	$deskripsi   = $data['deskripsi'];

	$query = "UPDATE lomba SET penyedia = '$penyedia', judul = '$judul', deadline = '$deadline', poster = '$poster', panduan = '$panduan', bidang = '$bidang', deskripsi = '$deskripsi' WHERE id = '$idLomba' ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Sukses</div>";
	}
}

function hapusLomba($idLomba)
{
	global $conn; 

	$query = "DELETE FROM lomba WHERE id = '$idLomba' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function hapusLombaKomen($idLomba)
{
	global $conn; 

	$query = "DELETE lomba.*, komentar.* FROM lomba, komentar WHERE lomba.id = '$idLomba' AND komentar.lomba = '$idLomba' ";

	if (mysqli_query($conn, $query)) {
		echo "Sukses";
	}
}

function cekPunyaKomen($idLomba)
{
	global $conn;
	$query = "SELECT * FROM komentar WHERE lomba = '$idLomba' ";
	$res   = mysqli_query($conn,$query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusLombaKomen($idLomba);
	} else {
		hapusLomba($idLomba);
	}


}

