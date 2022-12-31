<?php 
require 'functions.php';

if(isset($_POST['registrasi'])){
  if(registrasi($_POST) > 0 ) {
    echo "<script>
        alert('user baru berhasil ditambahkan , Silahkan Login');
        document.location.href = 'login.php';
    </script>";
  } else {
    echo 'user gagal di tambahkan!';
  }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <h3>Form Registrasi</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autocomplete="off" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Password :
          <input type="password" name="password1" required>
        </label>
      </li>
      <li>
        <label>
          Konfirmasi Password :
          <input type="password" name="password2" required>
        </label>  
      </li>
      <button type="submit" name="registrasi">Registrasi</button>
    </ul>
  </form>
</body>
</html>