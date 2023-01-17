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
echo '1.) <br>';
$name = "Zura";
$age = 28;
$isMale = true; // 3. Change into false
$height = 1.85;
$salary = null;
$course = true;
echo '<br><br><br>';


// 2. Print the variables. Explain what is concatenation
echo '2.) <br>';
echo 'Name is - '.$name . '<br>';
echo 'Age is - '.$age . '<br>';
echo 'Is gender male - '. ($isMale ? 'True':'False' ). '<br>';  //Warunek, jeśli true wyk lewa strone, jesli false prawa.
echo 'Height - '.$height . '<br>';
echo ('Salary - ').(is_NULL($salary)? 'None':$salary) . '<br>';
echo 'Has completed course? - '.($course?'True':'False' ). '<br><br><br>';

// 4. Print types of the variables
echo '4.) <br>';
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';
echo gettype($course) . '<br><br>';

// 5. Print the whole variable
echo '5.) <br>';
var_dump($name, $age, $isMale, $height, $salary, $course);
echo '<br><br><br>';

// 6. Change the value of the variable
echo '6.) <br>';
$name = false;
echo 'Zmiana name na falsz <br><br><br>';

// 7. Print type of the variable
echo '7.) <br>';
echo 'Typ nazwy to teraz: '.gettype($name) . '<br><br><br>';

// 8. Variable checking functions
echo '8.) <br>';
echo ('Czy nazwa jest typu string? ') . (is_string($name)?'True':'False').'<br>'; // false
echo ('Czy wiek jest typu int? ') . (is_int($age)?'True':'False').'<br>'; // true
echo ('Czy płeć jest typu boolean? ') . (is_bool($isMale)?'True':'False').'<br>'; // true
echo ('Czy wysokosc jest typu double? ') . (is_double($height)?'True':'False').'<br>'; // true
echo ('Czy placa jest typu null? ') . (is_NULL($salary) ? 'True' : 'False').'<br>'; //true
echo ('Czy kurs jest typu boolean? ') . (is_bool($course) ? 'True' : 'False').'<br>'; //true
echo '<br><br><br>';

// 9. Check if variable is defined
echo '9.) <br>';
var_dump(isset($name));
echo '<br>';
var_dump(isset($name2));
echo '<br><br><br>';

// 10. Constants
echo '10.) <br>';
define('PI', 3.14);
echo PI. '<br>';
var_dump(defined('PI')); 
echo '<br>';
var_dump(defined('PI2')); // defined(PI2)
echo '<br><br><br>';

// 12. Using PHP built-in constants
echo '12.) <br>';
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br><br>';
// no dobra chyba działa