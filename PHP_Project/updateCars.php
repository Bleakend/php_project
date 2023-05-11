<html lang="en">

<head>
	<title>Update a Car</title>
</head>

<body>
	<?php include('initSession.php');

	if (isset($_GET['carId'])) {
		$_SESSION['carId'] = $_GET['carId'];
	}

	if (isset($_POST['manage'])) {
		header("location: manageCars.php");
	}


	$carList = $carRentList->getCarById($_SESSION['carId']);

	if (isset($_POST['update'])) {

		foreach ($carRentList->carList as $key => $value) {
			if ($value->id == $_SESSION['carId']) {
				$value->id = $_POST['newid'];
				$value->name = $_POST['newname'];
				$value->horsePower = $_POST['newpower'];
				$value->seatNumber = $_POST['newnumber'];
				$value->price = $_POST['newprice'];

				
				unset($_SESSION['carId']);
				header("location: manageCars.php");
			}
		}
	}

	?>

	<form method='post' action='updateCars.php'>

		id:
		<input type="text" name="newid" value="<?php echo $carList->id ?>">
		<br>
		name:
		<input type="text" name="newname" value="<?php echo $carList->name ?>">
		<br>
		horse power:
		<input type="text" name="newpower" value="<?php echo $carList->horsePower ?>">
		<br>
		seats number:
		<input type="text" name="newnumber" value="<?php echo $carList->seatNumber ?>">
		<br>
		price:
		<input type="text" name="newprice" value="<?php echo $carList->price ?>">
		<br>
		<br>
		<br>
		<button type="submit" name="manage" value="manage"> manage </button>
		<button type="submit" name="update" value="update"> update </button>
	</form>
</body>

</html>