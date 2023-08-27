<?php 
include 'connection.php';
$id=$_POST['id_barang'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

mysqli_query($connection,"update barang set nama='$nama', harga='$harga', stok='$stok' where id_barang='$id'")or die('gagal');
header("location:tampil.php");


?>