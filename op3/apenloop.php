<?php

echo "<style> .rood {border: red solid 3px} .groen {border: green solid 3px } </style>";

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        $class = "rood";
    } else {
        $class = "groen";
    }
    echo '<img class="'.$class.'" src="img/aap'.$i.'.jpg">';
}
