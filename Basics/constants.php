<!-- Constants in PHP -->
<?php

/**
 * Declaring a constant with define function
 * the first parameter is the constant's name
 * the second paramenter is the constant's value
 */
define("username", "lanzath");
define("email", "gmail");
define("active", true);
define("languages", ["javascript, ", "php, ", "python"]);

echo "username: " . username . "<br>email: " . email . "<br>active user: " . active . "<br>languages: "; 

foreach (languages as $language) {
  echo $language;
};
