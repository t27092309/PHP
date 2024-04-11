<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $listProducts = [
        "iphone" => ["iphone1", "iphone2", "iphone3"],
        "samsung" => ["samsung1", "samsung2", "samsung3"],
        "xiaomi" => ["xiaomi1", "xiaomi2", "xiaomi3"]
    ];

    // for ($i = 0; $i < count($listProducts); $i++) {
    //     echo $listProducts[$i] . "<br>";
    // };

    // echo "<br>";
    // foreach ($listProducts as $products) {
    //     echo $products . "<br>";
    // }
    print_r($listProducts);

    echo "<br>";
    for ($i = 0; $i < count($listProducts["samsung"]); $i++) {
        echo $listProducts["samsung"][$i];
    }

    echo "<br>";
    foreach ($listProducts as $key => $value) {
        if ($key == "samsung") {
            foreach ($value as $products)
                echo $products;
        }
    }

    echo "<br>";
    $number = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];

    echo "<br>";
    $i = 0;
    // do{
    //     echo $number[$i] .".";
    //     $i++;
    // }while($i<count($number));

    echo ".<br>";
    while ($i < count($number)) {
        echo $number[$i] . ".";
        $i++;
    }
    ?>

</body>

</html>