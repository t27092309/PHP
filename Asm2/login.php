<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <button type="submit" name="submit">Login</button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "admin" && $password == "123456") {

            session_start();
            $_SESSION["username"] = $username;
            header("location:index.php");
        }
    }   
    ?>
</body>

</html>