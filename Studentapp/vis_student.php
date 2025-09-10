<?php
include "db.php";
$result = $conn->query("SELECT * FROM student");

echo "<h2>Studenter</h2><ul>";
while($row = $result->fetch_assoc()){
    echo "<li>".$row['brukernavn']." - ".$row['fornavn']." ".$row['etternavn']." (".$row['klassekode'].")</li>";
}
echo "</ul><a href='index.php'>Tilbake</a>";
?>