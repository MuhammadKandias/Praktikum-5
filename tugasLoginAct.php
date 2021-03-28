<?php
$hari=date("D");
if(empty($_GET['nama']) || empty($_GET['email'])){
	header("Location:redirectTugas.php");
} else {
	echo "<center>Nama : ".$nama = $_GET['nama']."</center><br>";
	echo "<center>Email : ".$email = $_GET['email']."</center><br>";

date_default_timezone_set('Asia/Jakarta');
	echo "<center>Hari: ".$hari."</center><br>";
	echo "<center>Tanggal : ".date("d-F-Y, H:i:s a")."</center><br>";
	echo "<center>Tanggal Login : ".date("d-F-Y")."</center><br>";
	echo '<meta http-equiv="refresh" content="3; url=http://localhost/praktikum5/tugasLogin.php">';
}
?>