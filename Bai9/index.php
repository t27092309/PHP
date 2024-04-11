<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $listName = ["apple", "banana", "orange"];
    $list = [
        "tao" => "apple",
        "chuoi" => "banana",
        "cam" => "orange"
    ];

    echo $listName[0];
    echo "<br>";
    echo $list["tao"];

    $listProduct = [
        "iphone" => "iphone15",
        "samsung" => "s20",
        "xiaomi" => "xiaomi13"
    ];
    echo "<br>";
    echo $listProduct["xiaomi"];

    $students = [
        ["John",  15, 8.5],
        ["Alice",  16, 9.2],
        ["Bob",  15, 7.8],
        ["Emily",  17, 8.9]
    ];
    echo "<br>";
    $sumGrade = 0;
    foreach ($students as $student) {
        echo $student[2];
        $sumGrade += $student[2];
    }
    echo "Tong diem:". $sumGrade;
    echo "<br>";
    // foreach ($students as $student => $key) {
    //     if ($key["grade"] == 9.2) {
    //         echo $key["grade"];
    //     }
    // }
    $listUser = [
        "user1" => [
            "name" => "John",
            "age" => 15,
            "grade" => 8.5
        ],
        "user2" => [
            "name" => "Alice",
            "age" => 16,
            "grade" => 9.2
        ],
        "user3" => [
            "name" => "Bob",
            "age" => 15,
            "grade" => 9.2
        ],
    ];
    echo "<br>";
    foreach($listUser as $user => $key) {
        echo $key["name"] . "<br>";
        echo $key["age"] . "<br>";
        echo $key["grade"] . "<br>";
    }

    echo "<br>";
    echo $listUser["user2"]["grade"];
    echo "<br>";
    foreach ($listUser as $user => $key) {
        if ($key["grade"] == 9.2) {
            echo $key["name"];
            echo $key["age"];
            echo $key["grade"];
        }
    };
    $listInterger = [1, 2, 3, 4,];
    echo "<br>";
    foreach ($listInterger as $key) {
        echo $key;
    };
    echo "<br>";
    $sum = 0;
    foreach ($listInterger as $key) {
        $sum += $key;
    }
    echo $sum;

    echo "<br>";

    $listFood = [
        "food1" => "banana",
        "food2" => "apple",
        "food3" => "orange",
    ];
    foreach ($listFood as $key => $value) {
       echo $key.":".$value;
       echo "<br>"; 
    }
    ?>
</body>

</html>