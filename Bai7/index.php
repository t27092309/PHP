<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    strlen() - Trả về độ dài của chuỗi
    str_replace() - Thay thế tất cả các lần xuất hiện của một chuỗi tìm kiếm bằng 1 một chuỗi
    strpos() - Tìm kiếm vị trí xuất hiện lần đầu tiên của một chuỗi con trong chuỗi
    trim() - Loại bỏ khoảng trắng hoặc các ký tự khác đầu và cuối trong chuỗi   
    
    */

    //1.strlen()
    $name = "Hello world";
    echo strlen($name);

    //2. str_replace()
    echo "<br>";
    $name = "Hello world";
    $name = str_replace("world", "Truong", $name);
    echo $name;

    //3. strpos()
    echo "<br>";
    $name = "Hello world";
    echo strpos($name, "world");

    //4. trim()
    echo "<br>";
    $name = "      Hello world ";
    echo trim($name);

    //---2. Các thao tác với mảng
    /*
    array_push() - Thêm 1 hoặc nhiều phần tử vào cuối mảng
    array_pop() - Xóa và trả về phần tử cuối cùng của mảng
    array_merge() - Hợp nhất 1 hoặc nhiều mảng
    unset() - Xóa 1 biến hoặc 1 phần tử mảng theo key
    */
    $arr = [1, 2, 3, 4, 5, 6];
    //1.array_push()
    echo "<br>";
    array_push($arr, 7, 8, 9);
    print_r($arr);

    //2.array_pop()
    echo "<br>";
    array_pop($arr);
    print_r($arr);

    //3.array_merge()
    echo "<br>";
    $ar=[10];
    $arr1=[1,2,3];
    $arr2=[4,5,6];
    $arr3= array_merge($arr1, $arr2);
    array_push($arr3, 7);
    print_r($arr3);

    //4. unset()
    echo "<br>";
    $arr = [1, 2, 3];
    unset($arr[1]);
    print_r($arr);




    ?>
</body>

</html>