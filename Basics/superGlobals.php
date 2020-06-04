<!-- PHP Superglobals -->
<?php
/**
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

/**
 * $GLOBALS
 * superglobal used to store variables of any scope of code in an array
 */
$x = 10;
$y = 15;

function sum() {
  /**
   * To get $x and $y variable inside function scope
   * $GLOBALS is needed
   */
  echo $GLOBALS['x'] + $GLOBALS['y'] . '<br>';
}

sum(); // 25

/**
 * $_SERVER
 * Superglobal that has data from headers, path, scripts in an array
 * for more info: https://www.php.net/manual/pt_BR/reserved.variables.server.php
 */
echo $_SERVER['PHP_SELF'] . '<br>';          // /Basics/superGlobals.php
echo $_SERVER['SERVER_NAME'] . '<br>';      // localhost
echo $_SERVER['SCRIPT_FILENAME'] . '<br>'; // C:/Users/{USER}/Documents/PHP/Basics/superGlobals.php
echo $_SERVER['SERVER_PORT'] . '<br>';    // 80

/**
 * Others superglobals will be used in another practical examples
 */
