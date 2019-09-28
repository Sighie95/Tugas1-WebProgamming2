<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("config.php");

  // membuat variabel untuk menampung data dari form edit
  $id = $_POST['id'];
	$nama	= $_POST['nama'];
	$username	= $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE nama_pancaker SET ";
  $query .= " nama = '$nama', ";
  $query .= "username='$username', ";
  $query .= "password = '$password', email='$email' ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($db, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Gagal menyambung data: ".mysqli_errno($db).
       " - ".mysqli_error($db));
  }
}

//lakukan redirect ke halaman index.php
header("location:index.php");

?>