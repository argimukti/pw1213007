<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa") ; 


// ketika tombol cari di klik
if (isset($_POST['cari'])){
  $mahasiswa = cari($_POST['keyword']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data Mahasiswa</a><br><br>
  <form action="" method="POST">
    <input type="text" name="keyword" size ="41" placeholder="Masukan Keyword Pencarian ..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>
      No
    </th>
    <th>Gambar</th>  
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

<?php if(empty($mahasiswa)) : ?>
  <tr>
    <td colspan="4"><p style="color:red; font-style: italic;">DATA TIDAK DITEMUKAN!</p></td>
  </tr>


<?php endif; ?>
  <?php $i=1 ?>
  <?php foreach( $mahasiswa as $mhs): ?>
    <tr>
  <td><?= $i++; ?></td>
  <td><img src="img/<?= $mhs['gambar'];?>" width="60"></td>
  <td><?= $mhs['nama'] ;?></td>
  <td>
    <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a> 
  </td>
  </tr>
  <?php endforeach; ?>
  </table>


</body>
</html>