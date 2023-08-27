<?php
include "connection.php";
session_start();
session_destroy();

//mengalihkan halaman sambil mengirim pesan logout
header("location:login.php?pesan=logout");
?>