<?php
$a = 0;
    echo "<h2>While Loop</h2>";
    while ($a <= 10) {
        echo "The number is $a<br>";
        $a++;
    }

    echo "<h2>Do-While Loop</h2>";
    $b=0;
    do {
        echo "The number is $b<br>";
        $b++;
    } while ($b <= 10);

    echo "<h2>For Loop</h2>";
    $c = 10;
    for ($i=0; $i<=$c ; $i++) { 
        echo "The number is $i<br>";
    }
?>