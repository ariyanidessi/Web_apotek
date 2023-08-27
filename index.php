<?php
session_start();
    if(empty($_SESSION['username'])){
        header ("location: login.php?pesan=belum_login");
    }
    include'connection.php';
?>