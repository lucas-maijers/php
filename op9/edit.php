<?php
$id = $_GET['id'];

$message = "";

if (isset($_FILES['bestandAanpassen']) && !empty($_POST['omschijvingAanpassen'])
    && !empty($_POST['uivoeringAanpassen'])&& !empty($_POST['categorieAanpassen']))  {
    $message = "Het versturen is gelukt.";
}else{
    $message = "Vul alles in!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Vlecht</title>
    <link href="broodstyle.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<nav>
    <a href="index.php">Overzicht</a>
    <a href="toevoegen.php">Broodjes toevoegen</a>
</nav>
<h2>
    <?php
    echo $message;
    ?>
</h2>
<form role="form" method="post" enctype="multipart/form-data" action="BroodTabelAanpassen.php?id=<?php echo $id ?>">
    <div class="form">
        <label class="bestand1" for="userfile[]">Afbeelding</label>
        <input  type="file" class="Form kiezen" name="bestandAanpassen">
    </div>
    <div class="form">
        <label class="naam1" for="type">Naam:</label>
        <input type="text" class="Form kiezen" name="naamAanpassen" value="">
    </div>
    <div class="form">
        <label class="soort1" for="type">Soort:</label>
        <input type="text" class="Form kiezen" name="soortAanpassen" value="">
    </div>
    <div>
        <label class="type1" for="type">Gewicht(gram):</label>
        <input type="text" class="Form kiezen" name="gewichtAanpassen">
    </div>
    <button type="submit" name="knop" class="btn btn-default">Submit</button>
</form>
<br>
<?php
?>
</body>
</html>