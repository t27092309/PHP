<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $listCar=["BMW","Toyota","Mercedes","Audi"];
    for($i=0;$i<count($listCar);$i++){
        echo $listCar[$i]."<br>";
    }
    $listCar=[
        [
            "name"=>"BMW",
            "price"=>100,
            "color"=>"red"
        ],
        [
            "name"=>"Toyota",
            "price"=>200,
            "color"=>"black"
        ],
        [
            "name"=>"Audi",
            "price"=>300,
            "color"=>"red"
        ]
    ];

//2.
echo "<br>2. <br>";
foreach($listCar as $car){
    foreach($car as $key=>$value){
        echo $key." ".$value."<br>";
    }
}
//3.
echo "<br>3. <br>";
foreach($listCar as $car){
    foreach($car as $key=>$value){
        if($value =="red"){
        }
        echo $key." ".$value."<br>";
    }
}
//4.
echo "<br>4. <br>";
$luyThua = function ($a) {
    return $a * $a;   
} ;
echo $luyThua(4);
//5.
echo "<br>5. <br>";
function printCar(){
    $listCar=["BMW","Toyota","Mercedes","Audi"];
     foreach($listCar as $car){
        echo $car." "."<br>";
    }
};
printCar();
    ?>
</body>
</html>