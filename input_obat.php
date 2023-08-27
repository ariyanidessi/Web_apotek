<?php
    include 'connection.php';
    $kategori = $_POST['kategori'];
    $id_obat = $_POST['id_obat'];
    $id_distributor = $_POST['id_distributor'];
    $nama_obat   = $_POST['nama_obat'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    
    $query = mysqli_query($connection, "insert into obat values('$kategori','$id_obat','$id_distributor','$nama_obat','$harga','$stok')") or die(mysqli_error($connection));

header("location:tampil_obat.php");

 ?>