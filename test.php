<?php

require 'Personnages.php';
$sasuke = new Personnage ("Sasuke", 1000,500, 700, 2000, []);

// SHOW ITEMS TEST

$sasuke -> show_stats () ;

// ADD ITEMS TEST

$sasuke -> addItems ("Shuriken") ;
$sasuke -> addItems ("Katana") ;
$sasuke -> addItems ("Foudre") ;
$sasuke -> addItems ("Sharingan") ;

// REMVOE ITEMS TEST 

$sasuke -> removeItems ("shuriken") ;

// SEARCH ITEMS TEST

$sasuke -> searchItems ("Katana") ;

var_dump($sasuke->items);

?>