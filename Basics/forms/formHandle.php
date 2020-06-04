<?php

/**
 * handle name and email inputs with $_POST superglobal
 * the GET method pass values in the url ($_GET superglobal)
 */
$name = $_GET['name'];
$email = $_GET['email'];

echo "Your name is $name and your email is $email <br>";
var_dump($_GET);

/**
 * Validations functions & methods for forms
 * Filter functions (filter_input - filter_var)
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 * https://www.php.net/manual/en/filter.filters.validate.php
 */
