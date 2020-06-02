<!-- Functions in PHP -->
<?php 

/**
 * Creating and calling functions
 */
function showName($name) {
  echo "<h1> Hello, I'm $name and I'm starting with PHP studies. </h1><br>";
}

showName('Lanza');

function circleArea($radius, $pi = 3.1415) {
  echo "The area of circle with $radius radius is: " . $pi * ($radius**2);
}

circleArea(20); 
