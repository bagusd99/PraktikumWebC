<?php
$conn = mysqli_connect("localhost", "root", "root", "mahasiswa");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn; 
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jk = htmlspecialchars($data["jk"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$fakultas = htmlspecialchars($data["fakultas"]);

	$query = "INSERT INTO mahasiswa
				VALUES
			('', '$nama', '$nim', '$email', '$jk', '$tempat', '$tgl_lahir', '$alamat', '$fakultas')
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn; 
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nim = htmlspecialchars($data["nim"]);
	$email = htmlspecialchars($data["email"]);
	$jk = htmlspecialchars($data["jk"]);
	$tempat = htmlspecialchars($data["tempat"]);
	$tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
	$fakultas = htmlspecialchars($data["fakultas"]);
	$query = "UPDATE mahasiswa SET
	nama = '$nama',
	nim = '$nim',
	email = '$email',
	jk = '$jk',
	tempat = '$tempat',
	tgl_lahir = '$tgl_lahir',
	fakultas = '$fakultas'
	WHERE id = $id
	";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT nim, nama, email, jk, concat(tempat,', ',tgl_lahir) as ttl, alamat, fakultas FROM mahasiswa WHERE
	nama LIKE '%$keyword%' OR
	nim LIKE '%$keyword%' OR
	email LIKE '%$keyword%' OR
	alamat LIKE '%$keyword%' OR
	fakultas LIKE '%$keyword%'
	ORDER BY nim";
	return query($query);
}

 ?>
