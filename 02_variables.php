<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// 1. Declare variables
echo '1.';
$name = "Zura";
$age = 28;
$isMale = true; // 3. Change into false
$height = 1.85;
$salary = null;
echo '<br><br>';


// 2. Print the variables. Explain what is concatenation
echo '2. <br>';
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>'.'<br>';

// 4. Print types of the variables
echo '4. <br>';
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>'.'<br>';

// 5. Print the whole variable
echo '5. <br>';
var_dump($name, $age, $isMale, $height, $salary);
echo '<br><br>';

// 6. Change the value of the variable
echo '6. <br><br>';
$name = false;

// 7. Print type of the variable
echo '7. <br>';
echo gettype($name) . '<br><br>';

// 8. Variable checking functions
echo '8. <br>';
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true
echo '<br><br>';

// 9. Check if variable is defined
echo '9. <br>';
var_dump(isset($name));
echo '<br>';
var_dump(isset($name2));
echo '<br><br>';

// 10. Constants
echo '10. <br>';
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br><br>';

// 12. Using PHP built-in constants
echo '12. <br>';
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';
