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
if(isset($_SESSION["username"]) && $_SESSION["username"] == "admin"){
    $_SESSION["username"];
}else{
    header("location:login.php");
}

    $listProduct = [
        [
            "id" => 1,
            "name" => "iphone",
            "sku" => "iphone-1",
            "price" => 1000,
            "cost" => 2000
        ],
        [
            "id" => 2,
            "name" => "iphone",
            "sku" => "iphone-2",
            "price" => 1000,
            "cost" => 2000
        ],
        [
            "id" => 3,
            "name" => "iphone",
            "sku" => "iphone-3",
            "price" => 1000,
            "cost" => 2000
        ],
    ]


    ?>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>sku</th>
                <th>price</th>
                <th>cost</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listProduct as $product) {
                echo "<tr>";
                foreach ($product as $key => $value) {
                    echo "<td> $value </td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <br><br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="search" id="search" placeholder="Search">
        <button type="submit" name="submit">Search</button>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>sku</th>
                    <th>price</th>
                    <th>cost</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST["submit"])) {
                    $search = $_POST["search"];
                    foreach ($listProduct as $product) {
                        if ($product["sku"] == $search) {
                            echo "<tr>";
                            foreach ($product as $key => $value) {
                                echo "<td> $value</td>";
                            }
                            echo "</tr>";
                        }
                    }
                }

                ?>
            </tbody>
        </table>
    </form>
    <a href="logout.php">Log out</a>
</body>

</html>