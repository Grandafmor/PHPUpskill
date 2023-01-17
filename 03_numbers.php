<?php

// 1. Declaring numbers
echo "1.) <br>";
$a = 5;
$b = 4;
$c = 1.2;
echo "<br>";

// 2. Arithmetic operations
echo "2.) <br>";
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br><br>'; 

// 3. Several arithmetic operations - (* $c + 6)
echo "3.) <br>";
echo $a / $b . '<br>';
echo $a % $b . '<br><br>';

// 4. Assignment with math operators
echo "4.) <br>";
$a += $b; echo $a.'<br>'; // $a = 9
$a -= $b; echo $a.'<br>'; // $a = 1
$a *= $b; echo $a.'<br>'; // $a = 20
$a /= $b; echo $a.'<br>'; // $a = 1.25
$a %= $b; echo $a.'<br><br>'; // $a = 1


// 5. Increment operator
echo "5.) <br>";
echo $a++ . '<br>'; //post-inkrementacja czyli zwraca 1 i dodaje 1 do a w tle
echo ++$a . '<br><br>'; //pre-inkrementacja czyli dodaje 1 do a co daje 3 i zwraca 

// 6. Decrement operator
echo "6.) <br>";
echo $a-- . '<br>';
echo --$a . '<br><br>';

// 7. Number checking functions
echo "7.) <br>";
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // true
echo '<br>';

// 8. Conversion
echo "8.) <br>";
$strNumber = '12.34';
$number = (float)$strNumber; // 8. Use floatval(), (int), intval()
var_dump($number);
echo '<br><br>';

// 9. Number functions
echo "9.) <br>";
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br><br>';

// 10. Formatting numbers
echo "10.) <br>";
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br><br>';

// https://www.php.net/manual/en/ref.math.php
