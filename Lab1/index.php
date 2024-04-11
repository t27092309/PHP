<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $listFood=[
        "noodle"=>["noodle1","noodle2","noodle3"],
        "pizza"=>["pizza1","pizza2","pizza3"],
        "cake"=>["cake1","cake2","cake3","cake4","cake5"],
        "bun"=>["bun1","bun2","bun3","bun4","bun5"],
    ];
//Bai1
    echo"--Bai1:<br>  ";
    var_dump($listFood["cake"]); 
//Bai2
    echo"<br>--Bai2:<br>  ";
    for($i=0;$i<count($listFood["pizza"]);$i++){
        echo $listFood["pizza"][$i];
    };
//Bai3
    echo"<br>--Bai3:<br>  ";
    $listMeal = array(
        "noodle",
        "pizza",
        "cake",
        "bun",
    );
    for($i=0;$i<count($listFood);$i++){
        for($j=0;$j<count($listFood[$listMeal[$i]]);$j++){
            echo $listFood[$listMeal[$i]][$j], "<br>";
        }
    };
//Bai4
    echo"<br>--Bai4:<br>";
    foreach($listFood["cake"] as $x){
        echo"$x <br>";
    };
//Bai5
    echo"<br>--Bai5:<br>";
    foreach($listFood["cake"] as $x){
        if($x == "cake4") continue;
        echo"$x <br>";
    };
    ?>    

</body>
</html>