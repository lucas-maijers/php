<?php

class Radioprogramma
{


    private $programmanaam = "Radionaam";
    private $omschrijving = "Test";

    private $songs = array("liedje1, liedje2, liedje3, liedje4, liedje5, liedje6, liedje7, liedje8, liedje9, liedje10");

    public function getProgramma()
    {
        $naam = $this->programmanaam;
        $omschrijving = $this->omschrijving;

        echo "Radioprogramma naam: $naam<br>";
        echo "Radioprogramma omschrijving: $omschrijving<br>";
    }

    public function getLiedjes()
    {
        $liedjes = $this->songs;

        for ($i = 0; $i < sizeof($liedjes); $i++) {
            echo "<p>$liedjes[$i]<br></p>";
        }
    }

}

$radio = new Radioprogramma();
$radio->getProgramma();

$radio->getLiedjes();