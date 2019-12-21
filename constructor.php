<?php
class Animal {

    //建构子
    public function __construct(){
        
    }

  

    public function move(){
        
        echo "(...)";
    }

    //解构子
    public function __destruct()
    {
        echo "I'm dead";
    }
}

$a = new Animal();
$a->move();


?>