<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $products = [

        "name" => "Product 1",
        "description" => "Description 1",
        "price" => 10,
        "image" => "image 1",
        "categoryName" => "DienThoai",

    ]
    ?>
    <form action="" method="" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $products["name"] ?>">
        <br><br>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?= $products["description"] ?>">
        <br><br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="<?= $products["price"] ?>">
        <br><br>
        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="<?= $products["image"] ?>">
        <br><br>
        <label for="categoryName">Category Name</label>
        <input name="categoryName" id="categoryName" value="<?= $products["image"] ?>">
        <br><br>
        <select name="categoryName" id="">categoryName
            <option value="1">Dien Thoai</option>
            <option value="2">Laptop</option>
        </select>

        <input type="submit" value="Submit">
    </form>

    <?php
    $article = [
        "articleName" => "Article 1",
        "articleDescription" => "Description 1",
        "articlePrice" => 10,
        "articleImage" => "image 1",
        "categoryName" => "Dienthoai",
    ];
    ?>
    <form action="" method="" enctype="multipart/form-data">
        <label for="articleName">Article Name</label>
        <input type="text" name="articleName" id="articleName" value="<?= $article["articleName"] ?>">
        <br><br>
        <label for="articleDescription">Article Description</label>
        <input type="text" name="articleDescription" id="articleDescription" value="<?= $article["articleDescription"] ?>">
        <br><br>
        <label for="articlePrice">Article Price</label>
        <input type="text" name="articlePrice" id="articlePrice" value="<?= $article["articlePrice"] ?>">
        <br><br>
        <label for="articleImage">Article Image</label>
        <input type="text" name="articleImage" id="articleImage" value="<?= $article["articleImage"] ?>">
        <br><br>
        <label for="categoryName">Category Name</label>
        <input name="categoryName" id="categoryName" value="<?= $article["categoryName"] ?>">
        <br><br>
        <select name="categoryName" id="">categoryName
            <option value="1">Dien Thoai</option>
            <option value="2">Laptop</option>
        </select>
        
    </form>

</body>

</html>