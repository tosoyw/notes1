<?php

class Building
{
    // Properties
    protected $name;
    public $floors;
    public $address;

    // Constructor
    public function __construct($name, $floors, $address)
    {
        $this->name = $name;
        $this->floors = $floors;
        $this->address = $address;
    }

    public function getFloors() {
        return $this->floors;
    }

    public function setFloors($floors) {
        $this->floors = $floors;
    }
}

class Condominium extends Building {
    // Write the getName and setName after defining the $name property.
    // These methods serve as the intermediary in accessing the object's properties.
    // These methods therefore define whether an object's property can be accessed or change.
    // These methods are called getters and setters and implement the encapsulation of an object.

    // getters and setters
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
}


$building = new Building('Caswyn Building', 8, 'Timog Avenue, Quezon City, Philippines');
$condominium = new Condominium('Enzo Condominium', 5, 'Buendia Avenue, Makati City, Philippines');