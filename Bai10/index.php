<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $listShoes = [
        [
            "name" => "adidas",
            "color" => "black",
            "size" => 42,
            "price" => 200,
        ],
        [
            "name" => "nike",
            "color" => "blue",
            "size" => 42,
            "price" => 200,
        ],
    ];



    ?>

    <table border="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>Color</th>
                <th>Size</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listShoes as $shoes) {
                echo "<tr>";
                foreach ($shoes as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>



    <form action="" method="get" enctype="multipart/form-data">
        <div class="form-control">
            <label for="name">Username</label>
            <input type="text" name="user-name" id="user-name">
        </div>
        <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
    </form>


</body>

</html>