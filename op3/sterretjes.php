<?php

echo "<style> body { text-align:center} </style>";

echo "* <br>";
for ($i = 0; $i <= 9; $i++) {
    for($j = 0; $j <= $i; $j++) {
       echo "*";
    }
    echo "* <br>";
}