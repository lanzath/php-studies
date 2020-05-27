<!-- Declaring Variables in PHP with '$' key -->
<?php 

$name = 'Lanza'; // String Variable
$age = 27; // Integer Variable
$height = 1.79; // Float Variable

/**
 * Concatenating variables with a string
 */
echo "My name is $name, I'm $age yo and I'm $height tall <br>";

/**
 * Dynamic Variables
 */
$food = 'Hamburger';
$$food = 'Cheese Burger';

// Hamburger
echo  $food . "<br>";
// Cheese Burger
echo  $Hamburger;
