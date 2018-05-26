<?php
include "../include/koneksi.php";

$id_mapel = $_POST["id_mapel"];
$nama = $_POST["nama"];

if(empty($_POST["id_mapel"]) || empty($_POST["nama"])){
	echo "<script language='javascript'>alert('Gagal di Edit');</script>";
	echo '<meta http-equiv="refresh" content="0; url=edit_data_mapel.php">';
}else{
	$sql = "UPDATE `mapel` SET `nama`='$nama' WHERE `id_mapel` = '$id_mapel'";
				$kueri = mysqli_query($conn, $sql);
				echo "<script language='javascript'>alert('Berhasil di Edit');</script>";
				echo '<meta http-equiv="refresh" content="0; url=data_mata_pelajaran.php">';
	}
?>
