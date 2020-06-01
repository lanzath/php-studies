<!-- Conditionals Statements in PHP -->
<?php 

/**
 * if
 * if else
 * elseif
 */
$num1 = 7;
$num2 = 8;

/**
 * Ternary condition (shorthand if)
 * Check if $num1 variable is greater than $num2
 */
$num1 > $num2 ? print_r($num1) : print_r($num2);

/**
 * if-else 
 */
if ($num1 > $num2) {
  echo "$num1 is greater than $num2";
} else {
  echo "$num2 is greater than $num1";
};

/**
 * elseif
 */
if ($num1 > 10) {
  echo "$num1 is greater than 10";
} elseif ($num1 > 7) {
  echo "$num1 is greater than 7";
} else {
  echo "$num1 is greater than 5!";
};

/**
 * Switch Case Statements
 * it's a conditional statement that checks if there's any match to take a command
 * default is set for an instruction if there's no match
 */
$color = 'Blue';
switch ($color) {
  case 'Red':
    echo 'Your favorite color is red';
  break;

  case 'Blue':
    echo 'Your favorite color is blue';
  break;
  
  default:
    echo "You don't have any favorite color :(";
}
