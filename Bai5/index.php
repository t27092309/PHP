<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $a = 5;
    // $b = 5;
    // echo $y = $a + $b;
    //1.Ham
    /*khi */
    function Tong(int $a, int $b)
    {
        echo gettype($a);
        echo $a + $b;
    }
    Tong(5, 5);
    //2.Ham
    // echo "<br>";
    // $Tru = function ($a, $b) {
    //     return $a - $b;
    // };
    // echo $Tru(5, 2);

    echo "<br>";
    // $Nhan = function ($a, $b = 5) {
    //     return $a * $b;
    // };
    // echo $Nhan(2, 4);

    function TongArray(...$number)
    {
        var_dump($number);
        $sum = 0;
        foreach ($number as $value) {
            $sum += $value;
        }
        echo $sum;
    }

    TongArray(1, 2, 3, 4, 5);

    ?>
</body>

</html>