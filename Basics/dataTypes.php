<!-- Basic type of datas in PHP -->
<?php

/**
 * String
 */
$phrase = "I'm studying PHP for backend purposes...";
echo var_dump($phrase) . "<hr>";

/**
 * Integer
 */
$num = 27;
echo var_dump($num) . "<hr>";

/**
 * Float
 */
$num2 = 3.14159092;
echo var_dump($num2) . "<hr>";

/**
 * Boolean
 */
$bool = true;
echo var_dump($bool) . "<hr>";

/**
 * Arrays
 */
$carsBrand = ["GM", "Ford", "Volkswages", "Fiat"];
echo var_dump($carsBrand) . "<hr>"; 

/**
 * Object
 */
class User {
  public $name;
  public function getName($name) {
    $this->$name = $name;
  }
};

/**
 * Instancing User object and setting a name
 */
$User = new User();
$User->getName("Lanza");
var_dump($User);
