<?php
include "../include/koneksi.php";

$nis = $_POST["nis"];
$nama_siswa = $_POST["nama_siswa"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$agama = $_POST["agama"];
$no_hp = $_POST["no_hp"];
$kelas = $_POST["kelas"];
$username = $_POST["username"];
$password = $_POST["password"];

if(empty($_POST["nis"]) || empty($_POST["nama_siswa"]) || empty($_POST["jenis_kelamin"]) || empty($_POST["alamat"]) || empty($_POST["agama"]) || empty($_POST["no_hp"]) || empty($_POST["kelas"]) || empty($_POST["username"])
 || empty($_POST["password"]) ){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambah_data_siswa.php">';
}else{
	$sql = "INSERT INTO `siswa` (`nis`, `nama`, `jk`, `agama`, `alamat`, `no_hp`, `username`, `password`, `kelas_id`)
			VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$agama', '$alamat', '$no_hp', '$username', '$password', '$kelas')";
			$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
			echo '<meta http-equiv="refresh" content="0; url=data_siswa.php">';
}
?>
