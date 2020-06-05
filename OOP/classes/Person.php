<?php

/**
 * Classes and Objects
 * Properties: public, private, protected
 * 
 * public: can be accessed in any part of the code
 * private: can only be accessed inside of it's own class
 * protected: can only be accessed by it's own class AND inherited classes
 */
class Person {
  protected $name;

  //class constant declaration
  const age = 27;

  public function setName($newName) {
    $this->name = $newName;
  }

  public function getName() {
    return $this->name;
  }
}
