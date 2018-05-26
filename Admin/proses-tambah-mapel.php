<?php
include "../include/koneksi.php";

$mapel = $_POST["mapel"];

if(empty($_POST["mapel"])){
	echo "<script language='javascript'>alert('Gagal di tambahkan');</script>";
	echo '<meta http-equiv="refresh" content="0; url=tambah_data_mapel.php">';
}else{
	$sql = "INSERT INTO `mapel` (`id_mapel`,`nama`)
			VALUES (NULL, '$mapel')";
			$kueri = mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Berhasil di tambahkan');</script>";
			echo '<meta http-equiv="refresh" content="0; url=data_mata_pelajaran.php">';
}
?>
