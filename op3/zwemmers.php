<?php

$clubnamen = array("De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje");
$ledenaantal = array(25, 32, 11, 23);
$temp = 0;

for ($i = 0; $i < sizeof($ledenaantal); $i++) {
    echo $clubnamen[$i];
    for ($j = 0; $j < $ledenaantal[$i]/5-1; $j++) {
        echo '<img src="img/zwemmer.png" alt="zwemmer">';
    }
    echo '<br>';
}