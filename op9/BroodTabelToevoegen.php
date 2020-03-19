<?php
print_r($_POST);

$naam = $_POST['naam'];
// Afbeeldingen op de juiste plaats zetten.
$target_dir = 'img/';
$target_file = $target_dir . basename($_FILES["userfile"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$uploadOk = 1;

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, this file can't be uploaded!";
    return;
} else {
    if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
        echo "File is uploaded";
    } else {
        echo "Error while uploading <br>";
    }
}

$soort = $_POST['soort'];
$vorm = $_POST['vorm'];
$gewicht = $_POST['gewicht'];

// De database die wordt gebruikt.
$mysqli = new mysqli('localhost', 'registeryvlecht', 'wVlecht', 'bakkerijWVlecht') or die('Error connecting.');

$query = "INSERT INTO broodjes (naam, image_id, soort, vorm, gewicht) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query) or die ("Error preparing.");
$stmt->bind_param('ssssi', $naam,$target_file, $soort, $vorm, $gewicht) or die('Error binding Param.');
$stmt->execute() or die('Error inserting image in database.');
$stmt->close();
$aantalBrooden = 2;

header("Location: http://51.68.47.8/phpLucas/op9/index.php");