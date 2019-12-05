<?php

if (deelbaar(4)) {
    echo "Dit getal is deelbaar door 3";
} else {
    echo "Dit getal is niet deelbaar door 3";
}

function deelbaar($a) {
    if ($a % 3 == 0) {
        return true;
    } else {
        return false;
    }
}
