<?php 
include 'connection.php';
$id=$_GET['id'];
mysqli_query($connection,"delete from obat where id_obat='$id'");
header("location:tampil.php");

?>