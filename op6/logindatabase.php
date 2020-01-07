<?php

$host = 'localhost';
$port = '3306';
$user = 'schoolaccount';
$pass = "ditishetschoolwachtwoord";
$db = "school";

$inlognaam = $_POST['inlognaam'];
$wachtwoord = $_POST['wachtwoord'];


$hashed = hash('sha512', $wachtwoord);

$dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user, $pass);

$inlog = $dbh->query("SELECT inlognaam from gebruikers WHERE inlognaam ='$inlognaam' AND wachtwoord ='$hashed'") or die("Error while Searching");

if ($inlog->fetch()) {
    echo "Welkom!";
} else {
    echo "Toegang geweigerd!";
}

