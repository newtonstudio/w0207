<?php
class Animal {
    public function move(){
        echo "(.....)";
    }


    protected function crawl(){

        $this->move();

    }
}

class Lion extends Animal {

    public function lionMove(){
        $this->crawl();
    }

}

class Tiger extends Animal {

    public function roar(){
        echo "(^^^^^^)";
    }

}

$lion = new Lion();
$lion->move();
$lion->lionMove();
echo "<br/>";
$tiger = new Tiger();
$tiger->move();
$tiger->roar();
?>