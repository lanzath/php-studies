<!-- Arrays in PHP -->
<?php
/**
 * Declaring arrays using brackets []
 */
$carBrands = ["BMW", "Porsche", "Audi"];
$carBrands[] = "Ferrari"; // Add new value to end of array
$carBrands[] = "Maseratti";
$carBrands[] = "Lamborghini";
print_r($carBrands);

/**
 * Declaring arrays using array function
 */
$cars = array("Hilux", "Mustang", "Corvette");

/**
 * Show the length of array with count function
 */
echo "<hr>" . count($carBrands); 

/**
 * Array iterate with foreach loop, show values one by one
 */
foreach ($cars as $car) {
  echo "<br>" . $car;
}
echo "<hr>";
/**
 * Associative arrays, using strings as index
 */
$user = ["name"=>"Lanza", "age"=>27, "city"=>"Rio Claro"];
$user["estado"] = "SP";

/**
 * Associative array iterate with foreach loop, iterating index and values
 */
foreach ($user as $index => $value) {
  echo $index . ":" . $value . "<br>";
}

/**
 * Multidimensional arrays
 */
$languages = [
  "js"=>["react", "nodejs", "angular"], 
  "php"=>["laravel", "cake", "symphony"],
  "python"=>["flask", "django", "CherryPy"]
];
echo "<hr>" . $languages["js"][2] . "<br>";
