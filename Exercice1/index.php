<?php
/*
Write a simple PHP class which displays the following string. 'MyClass class has initialized !'
 */

 // Creating the class
 class MyClass {
     public $sentence="MyClass class has initialized";


     public function MyClassString(){

        echo $this -> sentence;
     }
 }

 // Creating  an Object of this class
 $DisplayString = new MyClass;
 $DisplayString -> MyClassString();
?>

