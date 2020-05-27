<!-- Variables scope in PHP -->
<?php

/**
 * GLOBAL SCOPE
 */
$name = "Thiago Lanza";

/**
 * Since the variable $name isn't defined into function locally scope
 * it won't be showed on output, to get a global scope variable, must use
 * global key
 */
function showName() {
  global $name; // get $name from global scope
  echo $name;
}

showName();

/**
 * the $city variable is declared firstly in LOCAL Scope
 * so to show it in global scope, must add global before variable attribution 
 */
function showCity() {
  global $city; 
  $city = "Rio Claro"; //LOCAL scope
}

showCity();
echo "<hr> $city";

$a = 3;
$b = 7;
$c = 11;

/**
 * Using $GLOBALS array for get global scope variables
 */
function sum() {
  echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

sum();
