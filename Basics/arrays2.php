<!-- Arrays functions in PHP -->
<?php

/**
 * is_array($array) -> Verify if a variable is an array;
 * in_array($value, $array) -> Verify if there's a specific value in an array;
 * array_keys($array) -> Return a new array with the keys of parameter array;
 * array_values($array) -> Return a new array with values of parameter array;
 * array_merge($array1, $array2) -> Combines the parameters arrays into a new one;
 * array_pop($array) -> Deletes the last index of an array;
 * array_shift($array) -> Deletes the first index of an array;
 * array_unshift($array, "value") -> Adds one or more elements into beginning of an array;
 * array_push($array, "value") -> Adds one or more elements to the end of an array;
 * array_combine($keys, $values) -> Combines arrays keyns and values;
 * array_sum() -> Sums the array elements;
 * explode("", "") -> Transforms a string into an array;
 * implode("", $array) -> Transforms an array into a string;
 */

/**
 * Exemples
 */
$arr1 = ["php", "javascript", "python", "kotlin"];
$arr2 = ["cake", "symphony", "laravel", "node.JS", "ReactJS", "AdonisJS", "Flask", "Django"];

/**
 * is_array()
 */
echo is_array($arr1); // True


