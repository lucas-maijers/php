<?php

session_start();

if ($_SESSION["rol"] == "Administrator") {
    echo "<h1>Welkom ". $_SESSION["user"]. " op de adminpanel!</h1>";

    echo "<p><a href='login.php'>Login pagina</a></p>";
} else {
    header('Refresh: 5; URL=login.php');
    echo "<p>Jij mag niet op deze pagina zijn, u wordt over 5 seconden teruggestuurd naar de login pagina</p>";
}
