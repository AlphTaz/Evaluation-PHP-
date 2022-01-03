<?php

require 'Personnages.php';
$sasuke = new Personnage ("Sasuke", 1000,500, 700, 2000, []);

$sasuke -> addItems ("Shuriken") ;
$sasuke -> addItems ("Katana") ;
$sasuke -> addItems ("Foudre") ;
$sasuke -> addItems ("Sharingan") ;

// $x -> removeItems ("Chocolat") ;


var_dump($sasuke);

?>