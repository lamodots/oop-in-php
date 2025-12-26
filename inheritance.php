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


// Overiding parent properties and methods
echo $dog->speak() . "\n"; // Output: The dog barks.


// final modifier can be used to prevent inheritance
/** Final classes cannot be extended by other classes. This is useful when you want to ensure that the implementation of a class remains unchanged and cannot be modified through inheritance. 
final class  Animal2 {
    public function speak() {
        return "The cat meows.";
    }
}
final class Cat extends Animal2 {
    public function speak() {
        return "The cat meows.";
    }
}
*/

// const keyword can be used to define constant properties in classes
class Circle {  
    const PI = 3.14;  
   
    public function getArea($radius) {  
        return self::PI * $radius * $radius;
        // :: is called scope resolution operator   
    }  
}

$circle = new Circle();
echo "Area of circle: " . $circle->getArea(5) ;