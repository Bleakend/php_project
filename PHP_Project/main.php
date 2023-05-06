<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent a car</title>
</head>
<body>
    <h1>Rent a car</h1>
    <?php
    include("initSession.php");
    print_r($_SESSION);
    ?>
    <p><a href="addClient.php">Add a client</a></p>
    <p><a href="viewClient.php">View current clients</a></p>
    <p><a href="assignCar.php">Assign a car to a client</a></p>
    
</body>
</html>