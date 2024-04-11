<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //4+2=6     cong
    //4-2=2     tru
    //4*2=8     nhan
    //4/2=2     chia
    //4%2=0     chia lay so du
    //4**2=16   mu

    //1.Array
    $listProduct = array(
        "iphone" => ["iphone1", "iphone2"],
        "samsung" => ["samsung1", "samsung2", "samsung3"],
        "xiaomi" => ["xiaomi1", "xiaomi2", "xiaomi3", "xiaomi4"]
    );
    var_dump($listProduct);
    echo "<br>";
    print_r($listProduct);
    echo "<br>";
    echo count($listProduct);
    echo "<br>";
    echo $listProduct["samsung"][2]; //lay ra samsung3
    echo "<br>";
    echo $listProduct["xiaomi"][1];
    echo "<br>";
    //2.For
    echo "<hr>";
    $list = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for ($i = 0; $i < count($list); $i++) {
        echo $list[$i];
    }

    $listArticle = array(
        "Article1",
        "Article2",
        "Article3",
        "Article4"
    );

    echo "<br>";
    for ($i = 0; $i < count($listArticle); $i++) {
        echo $listArticle[$i];
        echo "<br>";
    }

    for ($i = 0; $i < count($listProduct["iphone"]); $i++) {
        echo $listProduct["iphone"][$i];
        echo "<br>";
    }
    echo "<br>";
    $listSmartPhone = array(
        "iphone",
        "samsung",
        "xiaomi"
    );
    for ($i = 0; $i < count($listProduct); $i++) {
        for ($j = 0; $j < count($listProduct[$listSmartPhone[$i]]); $j++) {
            echo $listProduct[$listSmartPhone[$i]][$j] . "<br>";
        }
    }
    ?>
</body>

</html>