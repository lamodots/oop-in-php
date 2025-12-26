<?php
class Book{
    // public is access modifiers by default is public
    public $name ;
    public $color;

    public function set_name($name){
        // the this variable only works inside a class method
        //in php
        $this->name = $name;
        
    }

    public function  get_name(){
        return $this->name;
    }

}

// create object from the class templates
$book1 = new Book();
$book1->set_name("PHP for Beginners");
echo $book1->get_name();

// check if an instance is an instance of a class.
$book1 instanceof Book
?>