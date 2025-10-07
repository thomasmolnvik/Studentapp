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
<?php
function listeboksStudentnummer() {
    include("db.php");
    $sqlSetning = "SELECT brukernavn FROM student ORDER BY brukernavn;";
    $sqlResultat = mysqli_query($db, $sqlSetning);
    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $brukernavn = $rad["brukernavn"];
        print("<option value='$brukernavn'>$brukernavn</option>");
    }
}
?>
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
<?php
function listeboksStudiumkode() {
    include("db.php");
    $sqlSetning = "SELECT studiumkode FROM studium ORDER BY studiumkode;";
    $sqlResultat = mysqli_query($db, $sqlSetning);
    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $studiumkode = $rad["studiumkode"];
        print("<option value='$studiumkode'>$studiumkode</option>");
    }
}
?>