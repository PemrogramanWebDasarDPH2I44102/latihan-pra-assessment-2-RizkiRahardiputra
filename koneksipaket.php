<?php
session_start();
require_once("db.php");
$tanggaldatang = $_POST['tanggaldatang'];
$_SESSION ['tanggaldatang'] = $namakaryawan;


$nip = $_POST['nip'];
$_SESSION ['nip'] = $nip;


$sql = "INSERT INTO karyawan(namakaryawan, nip) values ('$namakaryawan', '$nip' )";

if (mysqli_query($conn, $sql)) {
	# code...
	header("Location:view.php");
}else {

	echo "Data Gagal Masuk: ".$sql."<br>".mysqli_error($conn);
}
mysqli_query($conn);
?>