<?php
/* slett-klasse */
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
$sqlSlettStudenter = "DELETE FROM student WHERE klassekode='$klasse';";
mysqli_query($db, $sqlSlettStudenter) or die ("Ikke mulig å slette studenter med denne klassekoden");
$sqlSetning = "DELETE FROM klasse WHERE klassekode='$klasse';";
mysqli_query($db, $sqlSetning) or die ("Ikke mulig å slette klasse");
print ("Følgende klasse og tilhørende studenter er nå slettet: $klasse");
    }
}
?>