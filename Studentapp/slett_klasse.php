<?php
/* slett-klasse */
/*
/* Programmet lager et skjema for å kunne slette en klasse
/* Programmet sletter den valgte klassen
*/
?>
<script src="funksjoner.js"> </script>
<h3>Slett klasse</h3>
<form method="post" action="" id="slettKlasseSkjema" name="slettKlasseSkjema" onSubmit="return bekreft()">
Klasse
<select name="klasse" id="klasse">
<?php print("<option value=''>velg klasse </option>");
include("dynamiske-funksjoner.php"); listeboksKlassekode(); ?>
</select> <br/>
<input type="submit" value="Slett klasse" name="slettKlasseKnapp" id="slettKlasseKnapp" />
</form>
<?php
if (isset($_POST ["slettKlasseKnapp"]))
{
    $klasse = $_POST ["klasse"];
    if (!$klasse)
    {
        print ("Det er ikke valgt noen klasse");
    }
    else
    {
        include("db.php");
        $sqlSetning = "DELETE FROM klasse WHERE klassekode='$klasse';";
        mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette data i databasen");
        print ("Følgende klasse er nå slettet: $klasse");
// eksempel på dynamiske-funksjoner.php
function listeboksKlassekode() {
    include("db.php");
    $sqlSetning = "SELECT klassekode FROM klasse ORDER BY klassekode;";
    $sqlResultat = mysqli_query($db, $sqlSetning);
    while ($rad = mysqli_fetch_array($sqlResultat)) {
        $klassekode = $rad["klassekode"];
        print("<option value='$klassekode'>$klassekode</option>");
    }
}
    }
}
?>