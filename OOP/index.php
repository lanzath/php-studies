<?php
/**
 * Official documentation and references
 * https://www.php.net/manual/pt_BR/
 */

//get classes from external file
require './classes/Person.php';
require './classes/Programmer.php';
require './classes/Plane.php';

//external functions
require './connectBank.php';
require './connectSite.php';

//new object with constructor function (Programmer's class instance)
$programmer = new Programmer('Lanza', ['php', 'javascript', 'node.js']);

//show programmer's object name by getName() method
echo $programmer->getName();

//show programmer's object programming languages by getLanguages() method
echo $programmer->getLanguages();


echo '<br>' . $programmer::age;

ConnectBank\connect();
ConnectSite\connect();

// //assigning values to object's properties
// $person->setName('Lanza');

// //show name's value with showName method of Person's
// echo $person->getName();

// $plane = new Plane('787');
// echo $plane->getModel();
