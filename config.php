<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pendaftaran_loker";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
	die("ngga bisa terhubung dengan baik ke database") . mysqli_connect_error();
}
 ?>
