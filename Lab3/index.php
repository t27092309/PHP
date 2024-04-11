<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $productName = " Iphone 13 ";
    // 1. Xử lý chuỗi sao cho kết quả in ra là "Iphone 15"
    echo str_replace("13", "15", $productName);
    // 2. Hãy in ra độ dài của chuỗi
    echo"<br>2: ";
    echo strlen($productName);
    // 3. Hãy in ra vị trí của "13"
    echo "<br>3: ";
    echo strpos($productName, "13");
    // 4. Hãy xóa bỏ khoảng trắng 2 đầu của chuỗi
    echo"<br>4: ";
    $listProduct = ["iphone 13", "iphone 14", "iphone 15", "iphone 16", "iphone 17"];
    for($i=0;$i<count($listProduct);$i++){
        echo trim($listProduct[$i])."<br>";
    };
    // 5. Hãy lấy ra "Iphone 15" Trong mảng trên
    echo "<br>5: ";
    foreach($listProduct as $key){
        if($key == "iphone 15"){
            echo $key;
        }
    }
    // 7. Hãy xóa "iphone14" trong mảng trên
    echo "<br>7: ";
foreach($listProduct as $key){
    if($key == "iphone 14"){
        unset($key);
    }
}
print_r($listProduct);


    $listCar = [
        "BMW" => ["X1", "X3", "X5"],
        "Audi" => ["A1", "A3", "A5"],
        "Mercedes" => ["S1", "S3", "S5"],
    ];
    //8. Hãy dùng hàm thao tác với aray để xóa A3 trong mảng trên
    echo "<br>8: ";
    foreach($listCar as $car){
        foreach($car as $key){
            if($key == "A3"){
                unset($key);
            }
        }
    };
    //9. Hãy dùng hàm thao tác với array để thêm "S6" vào Mercedes.
    echo "<br>9: ";
    array_push($listCar["Mercedes"], "S6");

    $listOrder = [
        'order1' => [
            "orderId" => 1,
            'userId' => 'Hien',
            'product' => ["iphone", "samsung", "xiaomi"],
            'price' => 2000,
            'quantity' => 2,
        ],
        'order2' => [
            'orderId' => 2,
            'userId' => 'Linh',
            'product' => [
                "samsung" => ["samsung s22", "samsung s23", "samsung s24"],
                "Xiaomi" => ["Xiaomi 13", "Xiaomi 14", "Xiaomi 15"],
            ],
            'price' => 3000,
            'quantity' => 2,
        ],
    ]
    //10. Hãy Tạo 1 hàm nhận 1 tham số là điện thoại(Ví dụ: Xiaomi 15) dạng chuỗi, Hàm đó có tác dụng xóa điện thoại tìm được trong phần tử product của mảng order2.

    
    
    ?>
</body>
</html>