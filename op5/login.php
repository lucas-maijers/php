<?php



function login() {
    $inlognamen = array("piet@worldonline.nl", "klaas@carpets.nl", "truushendriks@wegweg.nl");
    $wachtwoorden = array("doetje123", "snoepje777", "arkiearkie201");

    for ($i = 0; $i < 2; $i++) {
        if ($_POST['inlognaam'] == $inlognamen[$i] && $_POST['wachtwoord'] == $wachtwoorden[$i]) {
            return true;
        }
    }
    return false;
}


if (login()) {
    echo "Welkom!";
} else {
    echo "Sorry, geen toegang.";
}