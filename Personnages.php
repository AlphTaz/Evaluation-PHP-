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

}
?>