<?php

    session_start();

    if (isset($_SESSION["user"])) {
        echo "<h1> Welkom " .$_SESSION["user"]. " op de website!</h1>";
        echo "<p><a href='login.php'>Login</a>";
    } else {
        header('location: login.php');
    }