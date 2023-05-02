<?php
class Client{
    public $lastName;
    public $firstName;

    function __construct($lastName, $firstName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

}

class Car{
    public $id;
    //id of client renting the car
    public $clientId;
    public $name;
    public $horsePower;
    public $seatNumber;
    public $price;
    //a boolean variable that indicate if a car is rented or not
    public $isRented = false;
    //when a car is created it`s not rented thus null
    public $rentDate = null;
    public $rentDays = null;

    public function __construct($id, $clientId, $name, $horsePower, $seatNumber, $price) {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->name = $name;
        $this->horsePower = $horsePower;
        $this->seatNumber = $seatNumber;
        $this->price = $price;
    }
}

class CarRent{
    public $carList;
    public $clientList;

    function getCarList(){
        return $this->carList;
    }
    function getClientList(){
        return $this->clientList;
    }
    function addCar($car){
        $this->carList[] = $car;
    }
    function addClient($client){
        $this->clientList[] = $client;
    }
}
?>