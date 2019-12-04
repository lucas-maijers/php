<?php

$leeftijd = array(10, 2, 65, 12);
$kost = 10;

for ($i=0; $i < sizeof($leeftijd); $i++) {
    if ($leeftijd[$i] < 3) {
        echo $leeftijd[$i] . " = 0 Euro <br>";
    } else if ($leeftijd[$i] > 65 || $leeftijd[$i] <= 12) {
        echo $leeftijd[$i] . " = " . $kost / 2 . " Euro<br>";
    } else {
        echo $leeftijd[$i] . " = " . $kost ."<br>";
    }
}


