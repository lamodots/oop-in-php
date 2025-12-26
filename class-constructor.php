<?php
// Executes automatically as soon as the object is created
// syntax  : __construct()
echo "<h1>Welcome to PHP OOP Constructor</h1>";
class Book
{
    public $author;
    // the __contruct() here is without arguments
    function __construct()
    {
        echo " A new book object is created. cha";
    }
}

// create object from the class templates
$book1 = new Book();

class Car
{
    public $manufacturer;

    function __construct($name)
    {
        $this->manufacturer = $name;
    }

    function get_manufacturer()
    {
        return $this->manufacturer;
    }

    function __destruct()
    {
        echo "<br> The car object is destroyed.";
        echo "<br> The car object is destroyed. {$this->manufacturer}";
    }
}

$manu1 = new Car("Toyota");
echo "<br>";
echo "Car Manufacturer is : " . $manu1->get_manufacturer();

// destructor function
// executes when the object is destroyed or the script is ended
// __destruct() . See example above. You can even access what is distroyed in the destructor. using $this keyword.