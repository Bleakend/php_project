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
    //$carRentList->addCar(new Car(5, "a", 1, 3, 200));
    $clients = $carRentList->getClientList();
    $cars = $carRentList->getFreeCarsList();
    
    if(count($clients) > 0 && count($cars) > 0){
        echo "<h1>assign cars to a client</h1>";

        echo "<form name='search' method='post' action='assignCar.php'>";
        


        echo "<p><label for='car'>select a car by name:  </label>";
        if(isset($_POST['car'])){
            echo "<input type='text' name='car' size=10 palceholder = 'eg:Mazda' value='".$_POST['car']."'> ";
        }else{
            echo "<input type='text' name='car' size=10 palceholder = 'eg:Mazda'>";
        }
        echo " <button type='submit' name='search'>Search</button></p></form>";


        //creating search table
        echo "<form name='confirm' method='post' action='confirmRent.php'>";

        echo "<label for='client'>select a client:  </label>";
        echo "<select name='client' id='client'> required";

        foreach($clients as $_key=>$value){
            if($value->id == $_POST['client']){
                echo "<option selected value='".$value->id."'>".$value->firstName." ".$value->lastName."</option>";
            }else{
                echo "<option value='".$value->id."'>".$value->firstName." ".$value->lastName."</option>";
            }
            
        }echo "</select> </br></br>";

        echo "<table border>";
        echo "<tr><th>id</th><th>name</th><th>horse-power</th><th>seats number</th><th>Select-Car</th></tr>";

        foreach($cars as $key=>$value){
            if(strncmp(strtolower($value->name), strtolower($_POST['car']), strlen($_POST['car'])) == 0){    
                echo "<tr>";
                echo "<td>".$value->id."</td>"."<td>".$value->name."</td>"."<td>".$value->horsePower."</td>"."<td>".$value->seatNumber."</td>";
                echo "<td><input type='radio' name='selectedCar' value='".$value->id."' id='carCheck'></td>";
                echo "</tr>";
            }
            
        }
        echo "</table><br>";
    }else{
        echo "<form action='main.php'>";
        echo "<h2>you need to have at least a single client and a single free car to use this page</h2>";
    }
    
    
    echo "<button type='submit' name='main'>Main menu</button>";
    if(!count($cars) == 0 && !count($clients) == 0){
        echo "<button type='submit' name='assign'>Assign</button>";
    }
    
    echo "</form>";
    ?>
    

</body>
</html>