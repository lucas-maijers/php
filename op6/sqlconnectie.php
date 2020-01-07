<?php

$host = 'localhost';
$port = '3306';
$user = 'schoolaccount';
$pass = "ditishetschoolwachtwoord";
$db = "school";

$dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user, $pass);

$data = $dbh->query('SELECT * from cursist') or die("error");

while ($row = $data->fetch()) {
    echo '<p>' . $row['cursistnr'] ." ". $row['naam'] ." ". $row['roepnaam'] ." ". $row['straat'] ." ". $row['postcode'] ." ". $row['plaats'] ." ". $row['geslacht'] ." ". $row['geb_datum'] . '</p>';
}