<?php

function tabelmaken()
{
    $dbc = mysqli_connect('localhost', 'registeryvlecht', 'wVlecht', 'bakkerijWVlecht') or die('Error while attempting database connection!');

    $query = "select * from broodjes";

    $result = mysqli_query($dbc, $query) or die ("Error while fetching information from database!");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>";
        echo $row["naam"];
        echo "</td>";
        echo "<td>";
        echo $row["vorm"];
        echo "</td>";
        echo "<td>";
        echo $row["soort"];
        echo "</td>";
        echo "<td>";
        echo $row["gewicht"];
        echo "</td>";
        echo "<td>";
        echo "<nav> <a href=\"details.php?id=" . $row['naam'] . "\">details</a></nav>";
        echo "</td>";
        echo "<tr>";
    }
}
