<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION["username"]) && $_SESSION["username"] == "dxt"){
        echo "Hello " . $_SESSION["username"];
    }else{
        header("location:login.php");
    }
?>
    <h1>Login successfully</h1>
    <a href="logout.php">Logout</a>
</body>
</html>