<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // 0. Tính tổng các số trong mảng input array
    $input_array = [1, 2, 3, 4, 5];

    echo "Bai0: <br>";
    $sum = 0;
    for ($i = 0; $i < count($input_array); $i++) {
        $sum += $i;
    }
    echo $sum;

    // 1. Hãy viết 1 hàm xóa phần tử bất kỳ trong mảng input array
    echo "<br>";
    echo "Bai1: <br>";
    array_pop($input_array);
    print_r($input_array);

    // 2. Hãy lấy ra toàn bộ thông tin của mảng person
    $person = [
        "name" => "John",
        "age" => 30,
        "city" => "New York"
    ];


    echo "<br>Bai2:<br>";
    foreach ($person as $key => $inf) {
        echo $key . ": " . $inf . "<br>";
    }

    /* 3. Cho mảng sau đây, hãy hãy viết 1 hàm nhận 1 tham số là tên,
 hãy thực hiện chức năng tìm kiếm theo tên đó, và in ra toàn bọ thông tin students */
    $students = [
        ["name" => "John", "age" => 15, "grade" => 8.5],
        ["name" => "Alice", "age" => 16, "grade" => 9.2],
        ["name" => "Bob", "age" => 15, "grade" => 7.8],
        ["name" => "Emily", "age" => 17, "grade" => 8.9]
    ];

    echo "<br>Bai3:<br>";
    foreach ($students as $key=>$a) {
       
            foreach ($a as $inf) {
                if($a["name"] =="John"){
                    echo $inf;
                }
                
            }
        }
    // 4. Tìm kiếm đơn hàng thông tin đơn hàng dựa trên số ID đơn hàng (mảng orders bên dưới)



    // 5. Tính Tổng tiền của tất cả đơn hàng
    $orders = [
        [
            'order_id' => 12345,
            'customer' => [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'address' => [
                    'street' => '123 Main Street',
                    'city' => 'City',
                    'country' => 'Country',
                    'zip_code' => '12345'
                ]
            ],
            'total_amount' => 150.50,
            'items' => [
                [
                    'item_id' => 1,
                    'item_name' => 'T-shirt',
                    'quantity' => 2,
                    'price' => 25.00
                ],
                [
                    'item_id' => 2,
                    'item_name' => 'Jeans',
                    'quantity' => 1,
                    'price' => 50.00
                ],
                [
                    'item_id' => 3,
                    'item_name' => 'Shoes',
                    'quantity' => 1,
                    'price' => 75.50
                ]
            ],
            'order_date' => '2024-03-22',
            'status' => 'pending'
        ],
        [
            'order_id' => 54321,
            'customer' => [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'address' => [
                    'street' => '456 Oak Avenue',
                    'city' => 'Town',
                    'country' => 'Country',
                    'zip_code' => '54321'
                ]
            ],
            'total_amount' => 200.00,
            'items' => [
                [
                    'item_id' => 4,
                    'item_name' => 'Dress',
                    'quantity' => 1,
                    'price' => 100.00
                ],
                [
                    'item_id' => 5,
                    'item_name' => 'Hat',
                    'quantity' => 2,
                    'price' => 50.00
                ]
            ],
            'order_date' => '2024-03-23',
            'status' => 'shipped'
        ]
    ];



    ?>
</body>

</html>