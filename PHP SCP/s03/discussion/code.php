<?php

// [ Section ] Objects as Variables
$buildingObj = (object) [
    'name' => 'Caswyn Building',
    'floors' => 8,
    'address' => (object) [
        'barangay' => 'Sacred Heart',
        'city' => 'Quezon City',
        'country' => 'Philippines'
    ]
];

// [ Section ] Objects from Classes
class Building
{
    // Properties
    public $name;
    public $floors;
    public $address;

    // Constructor - a constructor is used during the creation of an object.
    public function __construct($name, $floors, $address)
    {
        $this->name = $name;
        $this->floors = $floors;
        $this->address = $address;
    }

    // Methods
    public function printName()
    {
        echo "The name of the building is $this->name.";
    }
};

/* 
    Mini-Activity: 
    1. Create an animal class with three properties.
    2. Define a parametarized constructor for this class.
    3. Define a function for printing the animal name, family, gender.
    4. Use this class to instantiate a dog and a cat.
*/

class Animal
{
    public $name;
    public $family;
    public $gender;

    public function __construct($name, $family, $gender)
    {
        $this->name = $name;
        $this->family = $family;
        $this->gender = $gender;
    }

    public function printName()
    {
        echo "Name: $this->name. | \nFamily: $this->family | \nGender: $this->gender";
    }
}
$dog = new Animal('Kapwa', 'Canidae', 'Male');
$cat = new Animal('Luning-ning', 'Felidae', 'Female');

// [ Section ] Inheritance and Polymorphism
class Condominium extends Building
{   
    // $name, $floors and $address are inherited in this class. We can still add additional properties for the child class.
    // It means that the Condiminium class also have name, floors, and address just like a regular Building.

    // The printName function of this class overrides the behaviour of the printName from the Building class.
    public function printName() {
        return "The name of the condominium is $this->name";
    }
}

// Building class is the parent class, while the Condominium class is the third class.
// The constructor method is automatically executed when the 'new Building' or the 'new Condiminium' is used.
$building = new Building('Caswyn Building', '8', 'Timog Avenue, Quezon City, Philippines');
$condiminium = new Condominium('Enzo Condominium', 5, 'Buendia Avenue, Makati City, Philippines');