<?php
class Person {
    public $age = 35;
    public $name = "";
    public $hobby = "";

    public function __construct($name, $hobby){
        $this->name = $name;
        $this->hobby = $hobby;
    }

    public function greet(){
        echo $this->name." say Hello! he loves to play ".$this->hobby;
    }
    public function jump(){
        echo "Jump!";
    }
}

$p = new Person("Jason","Basketball"); //instantiate (Class -> Object)
$p->greet();

$p2 = new Person("David","Soccer"); //instantiate 
$p2->greet();
//$p->jump(); 
?>