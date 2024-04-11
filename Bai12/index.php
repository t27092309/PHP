<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Tạo phiên làm việc mới nếu chưa có phiên làm việc nào được tạo
//Mêis phiên làm việc đã tồn tại sẽ sử dụng lại phiên làm việc được tạo trước đó
session_start();

if(isset($_SESSION["email"]) && $_SESSION["email"] == "admin@gmail.com") {
    echo "Hello " . $_SESSION["email"];
}else{
    //Nếu chưa đăng nhập => chuyển về trang login
    header("Location: login.php");
}

?>

<h1>Login successfully</h1>
<a href="logout.php">Log out</a>    
</body>
</html>