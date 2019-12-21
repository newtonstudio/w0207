<?php
function __autoload($classname) {
    include ucfirst($classname).".php";
}


$rabbit = new Rabbit("Roger");
$tortoise = new Tortoise("David");

$game = new Game();
$game->takepart($rabbit);
$game->takepart($tortoise);

$game->warmup();
$game->start();
$game->report();
?>