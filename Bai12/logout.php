<?php
session_start();
//Xóa session   
unset($_SESSION["email"]);
//session_destroy();(xóa toàn bộ data)
//chuyển về trang login
header("Location: login.php");
?>