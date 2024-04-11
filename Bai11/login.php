<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_POST["submit"])){
        echo $_POST["email"];
        echo $_POST["password"];

        if($email == "admin@gmail.com" && $password == "123456"){
            session_start();
            $_SESSION["email"] = $email;
        }
    }
    // if($_SERVER["REQUEST_METHOD"]== "POST"){
    //     echo $_POST["email"];
    //     echo $_POST["password"];
    // }

    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-control">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"></label>
        </div>
        <button type="submit" name="submit">Login</button>
    </form>


</body>

</html>