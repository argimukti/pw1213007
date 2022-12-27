<?php 
// Koneksi ke DBMS
$conn = mysqli_connect('localhost', 'root', '', 'phpdasar');
// query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}


// tampung ke variabel mahasiswa
$mahasiswa = $rows ; 
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

  <table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>
      No
    </th>
    <th>Gambar</th>  
    <th>NRP</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Aksi</th>
  </tr>
  <?php $i=1 ?>
  <?php foreach( $mahasiswa as $mhs): ?>
    <tr>
  <td><?= $i++; ?></td>
  <td><img src="img/<?= $mhs['gambar'];?>" width="60"></td>
  <td><?= $mhs['nrp'] ;?></td>
  <td><?= $mhs['nama'] ;?></td>
  <td><?= $mhs['email'] ;?></td>
  <td><?= $mhs['jurusan'] ;?></td>
  <td>
    <a href="">Ubah</a> | <a href="">Hapus</a>
  </td>
  </tr>
  <?php endforeach; ?>
  </table>


</body>
</html>