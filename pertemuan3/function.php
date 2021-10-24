<?php

//hitung luas lingkaran
function calculateAreaOfCircle($jari) {
    $phi = 3.14;
    return $phi * pow($jari, 2);
}

echo calculateAreaOfCircle(5) ;
echo '<br>';
echo calculateAreaOfCircle(9) ;
echo '<br>';
echo calculateAreaOfCircle(6) ;
echo '<br>';