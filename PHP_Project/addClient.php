<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Client</title>
</head>
<body>
    
    <?php
        include("initSession.php");        
    
        if(isset($_POST['menu'])){
            header("location: main.php");

        }else if(isset($_POST['add'])){

            if(!empty($_POST['firstName']) && !empty($_POST['lastName'])){
                $client = new Client($_POST['firstName'], $_POST['lastName']);
                $carRentList->addClient($client);            
            }            
            else{

                $errorMessage = "Please fill all of the fields";
                echo "<h1>".$errorMessage."</h1>";
            }
            header("location: addClient.php");
        }

    ?>
    <form method='post' action='addClient.php'>

    <label for='first-name'>first name:</label>
    <input type='text' name='firstName' id='first-name' placeholder="eg:bilal">

    </br></br>

    <label for='last-name'>last name:</label>
    <input type='text' name='lastName' id='first-name' placeholder="eg:edelbi">

    </br></br>

    <button type="submit" name="menu">Main Menu</button>
    <button type="submit" name="add">add Client</button>

    </form>
</body>
</html>