<!-- Loops and Iteration in PHP -->
<?php

/**
 * While & Do Wile
 * loop through an instruction while a condition is true
 */
$counter = 0;
while ($counter < 10) {
  echo "$counter <br>";
  $counter++;
}

echo '<hr>';

$a = 1;
do {
  echo "$a <br>";
  $a++;
} while ($a <= 10);

/**
 * For & Foreach
 */

 for ($i = 0; $i < 10; $i++) { 
   echo "<p>Counting: $i</p>";
 }

 $planets = ['First'=>'Mercury','Second'=>'Venus','Third'=>'Earth'];
 foreach ($planets as $position => $planet) {
   echo "$position: $planet <br>";
 }
