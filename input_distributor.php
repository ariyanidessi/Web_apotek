<?php
    include 'connection.php';
    $id_distributor = $_POST['id_distributor'];    
    $nama_distributr   = $_POST['nama_distributor'];
    
    $query = mysqli_query($connection, "insert into distributor values(null,'$nama_distributor')") or die(mysqli_error($connection));

header("location:tampil_distributor.php");

 ?>