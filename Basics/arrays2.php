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
 * array_unshift($array, 'value') -> Adds one or more elements into beginning of an array;
 * array_push($array, 'value') -> Adds one or more elements to the end of an array;
 * array_combine($keys, $values) -> Return a new array combining an array for keys and another array for values;
 * array_sum() -> Sums the array elements;
 * explode('', '') -> Transforms a string into an array;
 * implode('', $array) -> Transforms an array into a string;
 */

/**
 * Exemples
 */
$arr1 = ['php', 'javascript', 'python'];
$arr2 = [
  'php frameworks' => ['laravel', 'cake'], 
  'javascript frameworks' => ['angular', 'adonis']
];

/**
 * is_array()
 */
echo is_array($arr1); // 1 (True)

/**
 * in_array()
 */
print_r(in_array('php', $arr1)); // 1 (true)
print_r(in_array('Angular', $arr2)); // No output due to 'angular' not found in $arr2

/**
 * array_keys()
 */
print_r(array_keys($arr1)); // [0, 1, 2]

/**
 * array_values()
 */
print_r(array_values($arr1)); // [php, javascript, python, kotlin]

/**
 * array_merge()
 */
//[php, javascript, python, php frameworks[laravel, cake], javascript frameworks[angular, adonis]]  
print_r(array_merge($arr1, $arr2));

/**
 * array_pop()
 */
print_r(array_pop($arr1)); // python
print_r($arr1); // [php, javascript]

/**
 * array_shift
 */
print_r(array_shift($arr2)); // [laravel, cake]
print_r($arr2); // [angular, adonis]

/**
 * array_unshift()
 */
array_unshift($arr2, ['php frameworks' => ['cake', 'laravel']]);
print_r($arr2);

/**
 * array_push()
 */
array_push($arr1, 'kotlin');
print_r($arr1); // [php, javascript, kotlin]

/**
 * array_combine()
 * both arrays must have same numbers of elements
 */
$array1 = ['php', 'js', 'python'];
$array2 = ['laravel', 'adonisJS', 'django'];
print_r(array_combine($array1, $array2)); // [php => laravel, js => adonisJS, python => django]

/**
 * array_sum()
 * must be a numeric array (float and int data)
 */
$numArray = [1, 4, 21, 49, 50, 102];
echo array_sum($numArray); // 227

/**
 * explode()
 */
$cars = 'hilux,camaro,mustang,jetta';
print_r(explode(',', $cars)); // [hilux, camaro, mustang, jetta] 

/**
 * implode()
 */
$dateArray = [28,'May', 2020];
print_r(implode(' ', $dateArray)); // 28 May 2020
