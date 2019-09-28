<?php
// pemanggilan config.php untuk mengkoneksikan ke database yang sudah di buat
include 'config.php';

if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email =$_POST['email'];

  
        

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO nama_pancaker VALUES ( null,'$nama', '$username','$password','$email')";
  $result = mysqli_query($db, $query);
  // periska query apakah ada error
  if(!$result){
      die ("gagal menyimpan data: ".mysqli_errno($db).
           " - ".mysqli_error($db));
  
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");


?>
