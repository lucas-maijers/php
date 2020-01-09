<?php

session_start();

$host = 'localhost';
$port = '3306';
$user = 'schoolaccount';
$pass = "ditishetschoolwachtwoord";
$db = "schooladmins";

$inlognaam = $_POST['inlognaam'];
$wachtwoord = $_POST['wachtwoord'];

$hashed = hash('sha512', $wachtwoord);

$dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user, $pass);

$inlog = $dbh->query("SELECT user from users WHERE user ='$inlognaam' AND wachtwoord ='$hashed'") or die("Error while Searching");
$role = $dbh->query("SELECT rol from users WHERE user ='$inlognaam' AND wachtwoord ='$hashed'") or die("Error while Searching");

if (isset($_GET["logout"])) {
    $_SESSION = array();
    $message = "Inloggen";
    session_destroy();
}

if ($inlog->fetch()) {
    $_SESSION["user"] = $_POST["inlognaam"];
    while ($result = $role->fetch()) {
        $_SESSION["rol"] = $result['rol'];
    }
    $message =  "Welkom ". $_SESSION["user"] . " jouw rol in het systeem is: ". $_SESSION["rol"];
} else {
    $message = "Inloggen";
}
?>

<html lang="en">
<body>
<h1><?php echo $message; ?></h1>
<p>Accounts zijn: user : wachtwoord is user. (Gebruikers rechten)</p>
<p>               admin : wachtwoord is admin (Administrator rechten)</p>
<form action="login.php" method="post">
    Username <input type="text" name="inlognaam" value=""><br>
    Password <input type="password" name="wachtwoord" value=""><br>
    <input type="submit" name="verstuur" value="Log in">
</form>
<p><a href="websiteding.php">super geheim iets dat helemaal niet geheim is.</a></p>
<p><a href="admin.php">Admin Panel</a></p>
<p><a href="login.php?logout">Uitloggen</a></p>
</body>
</html>
