<?php
// Arithmetic oprators
    $a = 10;
    $b = 15;

    echo "<h1>Arithmetic operators</h1>";
    echo "Addition of $a + $b =".$a+$b."<br>";
    echo "subtraction of $a - $b =".$a-$b."<br>";
    echo "multiplication of the $a * $b =".$a*$b."<br>";
    echo "Division of $a / $b =".$a/$b."<br>";

// relational operators
echo "<h1>Relational operators</h1>";
    echo "$a < $b=".($a<$b)."<br>";
    echo "$b > $a=".($b>$a)."<br>";
    
    $x = 10;
    $y = 5;
    $z = 15;

    echo "$x>=$y=".($x>=$y)."<br>";
    echo "$y>=$x=".(int)($y>=$x);

// Logical operators
echo "<h1>Logical operators</h1>";     
    echo "$a || $b = $x is".($a || $b = $x)."<br>";
    echo "$a && $x = $x is".($a && $x = $x);
?>