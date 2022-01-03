<?php

// Edition de la classe personnage avec les différents attributs

class Personnage {
    public $name;
    private $healthPoint;
    private $attack;
    private $defense;
    private $mana;
    public $items;

// Création de la fonction constructor

public function __construct (
    $name,
    $healthPoint,
    $attack,
    $defense,
    $mana,
    $items,

) {

    $this->name = $name;
    $this->healthPoint = $healthPoint;
    $this->attack = $attack;
    $this->defense = $defense;
    $this->mana = $mana;
    $this->items = $items;

}

// SECTION SET + GET 

// Set + get for name 

public function getName () {
    return $this->name;
}

public function setName ($y) {
    $this->name =$y;
}


// Set + get for healthPoint 

public function getHealthPoint () {
    return $this->healthPoint;
}

public function setHealthPoint ($y) {
    $this->healthPoint = $y;
}


// Set + get for attack 

public function getAttack () {
    return $this->attack;
}

public function setAttack ($y) {
    $this->attack = $y;
}


// Set + get for defense 

public function getDefense () {
    return $this->attack;
}

public function setDefense ($y) {
    $this->attack = $y;
}


// Set + get for mana 

public function getMana () {
    return $this->mana;
}

public function setMana ($y) {
    $this->mana = $y;
}


// Set + get for items 

public function getItems () {
    return $this->attack;
}

public function setItems ($y) {
    $this->attack = $y;
}

// FIN SECTION SET + GET 

// SHOW STATS FUNCTION

public function show_stats () {
    echo "Caractéristiques du personnage :\n";
    echo $this->name."\n";
    echo $this->healthPoint."\n";
    echo $this->attack."\n";
    echo $this->defense."\n";
    echo $this->mana."\n";
    echo $this->items."\n";
}

// SEARCH FUNCTION 

public function searchItems ($x) {
    $x= strtolower($x);
    if (($i = array_search($x, $this->items)) !== false){
    echo "Item exist in the array."; }
    
    else {
        echo "Item not exist in the array.";
    }
}

// ADD FUNCTION

public function addItems ($y) {
    $y= strtolower($y);
    array_push($this->items, $y);
}

// REMOVE FUNCTION

public function removeItems ($z) {
    $z= strtolower($z);
    $value = $z;
    if (($i = array_search($value, $this->items)) !== false)
    unset($this->items[$i]);
}
}
?>
