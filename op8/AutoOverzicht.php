<?php


function VoegAutoToeOverzicht()
{
    $autos[] = "audi1";
    $autos[] = "ferrari1";
    $autos[] = "ferrari2";
    $autos[] = "ferrari3";
    $autos[] = "fiat1";
    $autos[] = "fiat2";
    $autos[] = "mercedes1";
    $autos[] = "mercedes2";
    $autos[] = "mercedes3";
    $autos[] = "mercedes4";
    $autos[] = "opel1";
    $autos[] = "opel2";
    $autos[] = "opel3";
    $autos[] = "vw1";
    $autos[] = "vw2";
    $autos[] = "vw3";
    $prijzen[] = 21872817;
    $prijzen[] = 364627;
    foreach ($autos as $auto) {
        echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
    }
    foreach ($prijzen as $prijs) {
        echo "" . $prijs . "";
    }
}

function getGefilterdeLijst()
{
    $merk = $_POST['merk'];
    switch ($merk) {
        case "Audi":
            $autos[] = "audi1";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
        case "Ferrari":
            $autos[] = "ferrari1";
            $autos[] = "ferrari2";
            $autos[] = "ferrari3";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
        case "Fiat":
            $autos[] = "fiat1";
            $autos[] = "fiat2";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
        case "Mercedes":
            $autos[] = "mercedes1";
            $autos[] = "mercedes2";
            $autos[] = "mercedes3";
            $autos[] = "mercedes4";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
        case "Opel":
            $autos[] = "opel1";
            $autos[] = "opel2";
            $autos[] = "opel3";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
        case "Volkswagen":
            $autos[] = "vw1";
            $autos[] = "vw2";
            $autos[] = "vw3";
            foreach ($autos as $auto) {
                echo "<img id='auto' src='wheelyImages/" . $auto . ".jpg' alt='" . $auto . "'>";
            }
            break;
    }
}

