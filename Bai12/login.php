<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST["submit"])) {
    //lay data input qua key
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo $email . ' ' . $password;

    if ($email == "admin@gmail.com" && $password == "1111") {
        //khoi tao session
        session_start();
        //luu email vao session
        $_SESSION["email"] = $email;
        //chuyen ve trang index
        header("location:index.php");
    }
}

?>



<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="email">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>

</html>