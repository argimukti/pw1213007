<?php 
require 'functions.php';
// jika tidak ada id di ur
if (!isset($_GET['id'])){
  header("Location: index.php");
  exit;
}

// ngambil id dari url
$id = $_GET['id'];

// functions hapus
if (hapus($id) > 0){
    echo "<script> 
      alert('Data Berhasil di hapus'); document.location.href = 'index.php'; 
    </script>";
  } else {
    echo "<script> alert ('Data Gagal hapus') </script>";
  }


?>