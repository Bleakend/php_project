<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assign car</title>
</head>
<body>
    <?php
    include("initSession.php");

    //uncomment this if you want to test how the car looks without creating the create car page
    //$carRentList->addCar(new Car(1, "aaaaa", 1, 3, 200));
    $clients = $carRentList->getClientList();
    $cars = $carRentList->getCarList();

    echo "<h1>assign cars to a client</h1>";
    echo "<label for='client'>select a client:  </label>";
    echo "<select name='client' id='client'>";
    foreach($clients as $_key=>$value){
        echo "<option value='".$value->id."'>".$value->firstName." ".$value->lastName."</option>";
    }
    echo "</select>";

    echo "</br></br>";

    echo "<label for='car'>select a car by name:  </label>";
    echo "<select name='car' id='car' multiple>";
    foreach($cars as $_key=>$value){
        echo "<option value='".$value->id."'>".$value->name."</option>";
    }
    echo "</select>";

    echo "</br></br>";

    echo "<table border>";
    echo "<tr><th>id</th><th>name</th><th>horse-power</th><th>seats number</th><th>Select-Car</th></tr>";
    foreach($cars as $key=>$value){
        echo "<tr>";
        echo "<td>".$value->id."</td>"."<td>".$value->name."</td>"."<td>".$value->horsePower."</td>"."<td>".$value->seatNumber."</td>";
        echo "<td><input type='checkbox' name='selectedCars[]' value='".$value->id."' id='carCheck'></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    

</body>
</html>