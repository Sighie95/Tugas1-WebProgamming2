<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
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
         }
    }
</script>
      <h1>Data Masukkan Pancaker</h1>
    <div class="container">
      <form id="form_pancaker" action="proses_input.php" method="post" name="cekForm" onSubmit="return cekFile()">
        <br>
        <fieldset>
        <legend><center>Input Data</center></legend>
          <p>
            <label for="nama">Nama :<br></label>
            <input type="text" name="nama" size="40" id="nama" placeholder="">
          </p>
          <p>
         <tr>
            <td>Username :<br></td>
            
            <td><input type="text" name="username" size="40">
            </td>
           </tr>
         </p>
         <p>
        <tr>
            <td>Password :<br></td>
            
            <td><input type="password" name="password" size="40"></td>
           </tr>
         </p>
         <p>
        <tr>
            <td>Email :<br></td>
            
            <td><input type="email" name="email" size="40" ></td>
           </tr>
         </p>
        </fieldset>
        <p>
          <input type="submit" class="btn btn-primary" name="input" value="Simpan">
           <a href="index.php" class="btn btn-primary">Kembali</a>
        </p>
    </div>
  </body>
</html>