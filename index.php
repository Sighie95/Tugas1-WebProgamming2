<?php
  include 'config.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Data CRUD Pancaker</title>
  	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <center><h1>Data Para Pancaker 2019</h1></center>
    <left><a href="input.php">(+) Data Pancaker</a></left>
    <br/>
    <table class="zebra-table" border="1">
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Tindakan</th>
      </tr>
      <?php
      // query untuk menampilkan secara urut ID
      $query = "SELECT * FROM nama_pancaker ORDER BY id ASC";
      $result = mysqli_query($db, $query);

      //pengecekan error pada query
      if(!$result){
        die ("query error: ".mysqli_errno($db).
           " - ".mysqli_error($db));
      }

      $no = 1; //variabel agar sesuai nomor urut
      // kemudian ditampilkan dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; //menampilkan nomor
        echo "<td>$data[nama]</td>"; //menampilkan nama
        echo "<td>$data[username]</td>"; //menampilkan username
        echo "<td>$data[password]</td>"; //menampilkan password
        echo "<td>$data[email]</td>"; //menampilkan  email

        // membuat link untuk mengedit dan menghapus data

        echo '<td>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan hapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; 
      }
      ?>
    </table>
  </body>
</html>
