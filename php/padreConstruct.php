<?php

class MyClass {
   function __construct () {
       print " <br />From Parent Class Constructor\n " ;
       $this->name = "MyClass";
   }

    function __destruct (){
        print "<br />Destructor called. Destroying class ... " . $this->name . "<br />";
    }
}

class MySubClass extends MyClass {
   function __construct () {
       $this->name = "MySubClass";
       parent::__construct ();
       print " <br />From SubClass constructor\n ";
   }
}

$test = new MySubClass();

$path = "../";

foreach (new DirectoryIterator($path) as $file) {
    print "<br /> . $file";
}

