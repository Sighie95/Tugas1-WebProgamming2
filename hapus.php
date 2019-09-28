<?php
// pemanggilan config.php untuk mengkoneksikan ke database yang sudah di buat
  include("config.php");

  if (isset($_GET["id"])) {

    $id = $_GET["id"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM nama_pancaker WHERE id='$id' ";
    $hasil_query = mysqli_query($db, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($db).
           " - ".mysqli_error($db));
    }
  }
  // meredirect ke halaman index.php
  header("location:index.php");
?>