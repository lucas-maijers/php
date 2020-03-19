<?php


class Aap
{
    public $soort;

    public function __construct($soort)
    {
        $this->soort = $soort;
    }

    public function getUrl()
    {
        return "https://www.google.nl/search?q=" . $this->soort . "&tbm=isch";
    }
}

class ApenOverzicht
{
    public $apenlijst;

    public function __construct()
    {
        $this->apenlijst = [];
    }

    public function voegAapToe($aap)
    {
        $this->apenlijst[] = $aap;
    }

    public function getApenLijst()
    {
        sort($this->apenlijst);
        return $this->apenlijst;
    }
}

$apen = new ApenOverzicht();

$apen->voegAapToe(new Aap("Baviaan"));
$apen->voegAapToe(new Aap("Guereza"));
$apen->voegAapToe(new Aap("Langoer"));
$apen->voegAapToe(new Aap("Tamarin"));
$apen->voegAapToe(new Aap("Neusaap"));
$apen->voegAapToe(new Aap("Halfaap"));
$apen->voegAapToe(new Aap("Mandril"));
$apen->voegAapToe(new Aap("Oeakari"));
$apen->voegAapToe(new Aap("Faunaap"));
$apen->voegAapToe(new Aap("Hoelman"));
$apen->voegAapToe(new Aap("Meerkat"));
$apen->voegAapToe(new Aap("Oormaki"));
$apen->voegAapToe(new Aap("Gorilla"));
$apen->voegAapToe(new Aap("Kuifaap"));
$apen->voegAapToe(new Aap("Mensaap"));
$apen->voegAapToe(new Aap("Spinaap"));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monkey Business</title>
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="apenstylesheet.css">
</head>
<body>
<img src="apenplaatjes/monkey-business.jpg" alt="Monkeybussiness">
<h1>Selecteer jouw aap!</h1>
<img src="apenplaatjes/monkey_swings.png" alt="Monkeyswings">
<br>
<?php foreach ($apen->getApenLijst() as $aap) { ?>
    <a href="<?= $aap->getUrl(); ?>"><?= $aap->soort ?></a><br>
<?php } ?>
</body>
</html>