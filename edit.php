<?php
 // pemanggilan config.php untuk mengkoneksikan ke database yang sudah di buat
  include 'config.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    // menampilkan data mahasiswa dari database yang mempunyai id=$id
    $query = "SELECT * FROM nama_pancaker WHERE id='$id'";
    $result = mysqli_query($db, $query);
    // mengecek apakah query gagal
    if(!$result){
      die ("Gagal menyambung data: ".mysqli_errno($db).
         " - ".mysqli_error($db));
    }
   
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    $username = $data["username"];
    $password = $data["password"];
    $email = $data["email"];

  } else {
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>

    <script>
    function cekFile() {
      var cek = document.forms['cekForm']['nama'].value;
      var cek = document.forms['cekForm']['username'].value;
      var cek = document.forms['cekForm']['password'].value;
      var cek = document.forms['cekForm']['email'].value;
         if(cek==null || cek=="")
         {
           alert("Form harus di isi !!!");
           return false;
         }if(cek1==null || cek1=="")
         {
           alert("Form harus di pilih !!!");
           return false;
         }
    }
    </script>
     <h1>Edit Data Pancaker</h1>
    <div class="container">
      <form id="form_pancaker" action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <fieldset>
        <legend><center>Data Pancaker</center></legend>
        <p>
           <tr>
            <td>Nama :<br></td>
            <td><input type="text" name="nama" size="40" value="<?php echo $data['nama']; ?>" ></td>
           </tr>
          </p>
          <p>
            <td>Username</td>
              <td>:<br></td>
              <td><input type="text" name="username" size="40" value="<?php echo $data['username']; ?>">
              </td>
             </tr>
          </p>       
          <p>
           <tr>
            <td>Password</td>
            <td>:<br></td>
            <td><input type="password" name="password" size="40" value="<?php echo $data['password']; ?>"></td>
           </tr>
          </p>
          <p >
           <tr>
            <td>Email</td>
            <td>:<br></td>
            <td><input type="email" name="email" size="40" value="<?php echo $data['email']; ?>"></td>
           </tr>
          </p>
        </fieldset>
        <p>
          <input type="submit" class="btn btn-primary" name="edit" value="Edit">
          <a href="index.php" class="btn btn-primary">Kembali</a>
        </p>
      </form>
  </body>
</html>