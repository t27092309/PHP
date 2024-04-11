<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //1.
    $sum = 0;
    $cart = [
        "item1" => ["name" => "Áo", "price" => 25],
        "item2" => ["name" => "Quần", "price" => 30],
        "item3" => ["name" => "Giày", "price" => 50]
    ];
    foreach ($cart as $item) {
        echo $item["name"] . "<br>";
        foreach ($item as $key => $value) {
            echo $key . ":" . $value . "<br>";
            if ($key == "price") {
                $sum += $value;
            }
        }
    }
    echo "<br>Total value: $sum";
    //2.
    $Average = 0;
    echo "<br> <br>";
    $student = [
        "John" => [80, 75, 90],
        "Alice" => [85, 90, 88],
        "Bob" => [70, 65, 75]
    ];
    foreach ($student as $key => $score) {
        foreach ($score as $score1) {
            $Average += $score1;
        }
        $Average = $Average / count($score);
        echo $key . ": " . $Average . "<br>";
        $Average = 0;
    }   
    //3.
    echo "<br> <br>";
    $books = [
        [
            "id" => 1,
            "title" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "genre" => "Fiction",
            "price" => 10.99
        ],
        [
            "id" => 2,
            "title" => "1984",
            "author" => "George Orwell",
            "genre" => "Sci-Fi",
            "price" => 12.5
        ]
    ];
    $totalBooks = 0;
    foreach ($books as $book) {
        foreach ($book as $key => $value) {
            if ($key == "id") {
            $totalBooks++;
            }
        }
    };
    echo "Total books: $totalBooks";
//4.
echo "<br> <br>";
foreach ($books as $book) {
    if ($book['author'] == 'Harper Lee') {
        echo "id:".$book["id"]."<br>";
        echo "title:".$book["title"]."<br>";
        echo "author:".$book["author"]."<br>";
        echo "genre:".$book["genre"]."<br>";
        echo "price:".$book["price"]."<br>";
        echo "<br>";
    }
}
    // var_dump($books);




    ?>

</body>

</html>