<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        #container{
            width: 500px;
            margin: 0 auto;
        }
    </style>


    <?php
    $listProduct = [
        [
            "productName" => "Apple MacBook Pro 17",
            "color" => "Silver",
            "category" => "Laptop",
            "price" => "$2999"
        ],
        [
            "productName" => "Microsoft Surface Pro",
            "color" => "White",
            "category" => "Laptop PC",
            "price" => "$1999"
        ],
        [
            "productName" => "Apple MacBook Pro 17",
            "color" => "Silver",
            "category" => "Accessories",
            "price" => "$99"
        ]
    ];
    ?>

    <div id="container">
        <table border="1">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Color</th>
                    <th>Category</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listProduct as $product) {
                    echo "<tr>";
                    foreach ($product as $key => $value) {
                        echo "<td> $value</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <form action="" method="get" enctype="multipart/form-data">
            <input type="text" name="search" id="search" placeholder="Search">
            <button type="submit" name="submit">Search</button>
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Color</th>
                        <th>Category</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET['submit'])) {
                        $search = $_GET['search'];
                        foreach ($listProduct as $product) {
                            if ($product['productName'] == $search) {
                                echo "<tr>";
                                foreach ($product as $key => $value) {
                                    echo "<td> $value</td>";
                                }
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
            </table>
        </form>
    </div>
</body>

</html>