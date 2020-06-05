<?php 
/**
 * Class inheritance
 * Inheritance is when a class has another class data
 * 
 * As programmer is a person, it's useful to inherit 
 * Person class info as $name i.e.
 */
class Programmer extends Person {
  public $language;
  
  public function __construct($name, $lang) {
    $this->name = $name;
    $this->language = $lang;

    //magic constant __CLASS__ refers the class name
    echo '<br>Object '.__CLASS__.' instanced!<br>';
  }

  public function getLanguages() {
    // iterating $language array with foreach loop
    foreach ($this->language as $lang) {
      echo "<br> $lang";
    }
  }
}
