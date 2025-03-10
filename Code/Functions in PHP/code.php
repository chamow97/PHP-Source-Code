<?php

$PI = 3.14;

function areaOfCircle($radius) {
    return $PI * $radius * $radius;
}

function counter() {
    static $count = 0;
    $count++;
    echo $count;
}

// echo areaOfCircle(10);
// echo " $PI";

// counter();
// counter();


// echo strlen("Guvi is awesome!"); 

echo max(1, 2, 454, 23, -26);
?>
