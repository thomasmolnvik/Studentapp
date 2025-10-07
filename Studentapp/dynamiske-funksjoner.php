<?php
function listeboksKlassekode() {
    include("db.php");
    $sqlSetning = "SELECT klassekode FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning);
    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $klassekode = $rad["klassekode"];
        print("<option value='$klassekode'>$klassekode</option>");
    }
}
?>