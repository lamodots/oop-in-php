<?php

echo " Inheritance in PHP\n";
// Inheritance is a mechanism where a new class inherits the properties and behavior (methods) of

// an existing class. The existing class is called the "parent" or "base" class, and the new class is called the "child" or "derived" class.

// Creating a base class
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        return "The animal makes a sound.";
    }
}


// Creating a derived class
class Dog extends Animal {
    public function speak() {
        return "The dog barks.";
    }
} 

$dog = new Dog("Buddy");
echo $dog->name . "\n"; // Output: Buddy
