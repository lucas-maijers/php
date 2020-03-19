<?php
$id = $_GET['id'];
function details($detail)
{
    $id = $_GET['id'];
    $dbc = mysqli_connect('localhost', 'registeryvlecht', 'wVlecht', 'bakkerijWVlecht') or die('Error connecting.');
    $query = "SELECT $detail FROM broodjes WHERE naam = '$id'";
    $result = mysqli_query($dbc, $query) or die ("Error querying.");
    while($row = $result->fetch_assoc()) {
        echo $row[$detail];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bakkerij Vlecht</title>
    <link href="broodstyle.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<div class="start">
    <nav>
        <a href="index.php">Overzicht</a>
        <a href="toevoegen.php">Broodjes toevoegen</a>
        <a href="edit.php?id=<?php echo $id?>">broodjes aanpassen</a>
    </nav>
    <h1>
        De details van dit broodje
    </h1>
    <p class="lead">
        Alle gegevens van dit heerlijke broodje
    </p>
    <h3>
        De naam van de heerlijke broodje is: <?php details("naam"); ?><br>
    </h3>
    <p>
        Dit broodje weegt <?php details("gewicht"); ?> gram<br>
    </p>
    <p>
        Het soort meel is <?php details("soort"); ?><br>
    </p>
    <img src="<?php details("image_id"); ?>">
</div>
</body>
</html>