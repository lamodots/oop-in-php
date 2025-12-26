<?php
echo "Access Modifiers in PHP\n";
// Types of access modifier in PHP
/***
 * 1. Public
 * 
 * 2. Private
 * 3. Protected
 */

class Book
{
    public $author;
    // the __contruct() here is without arguments
    function __construct($author)
    {
        $this->author= $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

// create object from the class templates
$book1 = new Book('OO');
$book1->author = "J.K Rowling"; // public can be accessed outside the class

class Booka
{
    protected $author;
    // the __contruct() here is without arguments
    function __construct($author)
    {
        $this->author= $author;
    }

    protected function getAuthor()
    {
        return $this->author;
    }
}

// create object from the class templates
$book2 = new Booka("J.K Rowling");
// echo $book2->getAuthor(); throws error
//$book2->author = "J.K Rowling"; // will throw error as protected cannot be accessed outside the class 
// only inside the class or by derived class
class Books
{
    private $author;
    // the __contruct() here is without arguments
    function __construct($author)
    {
        $this->author= $author;
    }

    private function getAuthor()
    {
        return $this->author;
    }
}

// create object from the class templates
$book2 = new Booka("J.K Rowling");
// echo $book2->getAuthor(); // throws error
//$book2->author = "J.K Rowling"; // will throw error as protected cannot be accessed outside the class 
// only inside the class or by derived class