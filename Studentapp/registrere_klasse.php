<?php /* registrer-klasse */
/*
/* Programmet lager et html-skjema for å registrere et klasse
*/
?>
<h3>Registrer klasse </h3>
<form method="post" action="" id="registrerKlasseSkjema" name="registrerKlasseSkjema">
klasse <input type="text" id="klasse" name="klasse" required /> <br/>
<input type="submit" value="Registrer klasse" id="registrerKlasseKnapp" name="registrerKlasseKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
if (isset($_POST ["registrerKlasseKnapp"]))
{
$klasse=$_POST ["klasse"];

if (!$klasse)
{
print ("Alle felt m&aring; fylles ut");
}
else
{
include("db.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="SELECT * FROM klasse WHERE klasse='$klasse';";
$sqlResultat=mysqli_query($database,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
$antallRader=mysqli_num_rows($sqlResultat);
if ($antallRader!=0) /* klassen er registrert fra før */
{
print ("Klassen er registrert fra f&oslashr");
}
else
{
$sqlSetning="INSERT INTO klasse (klasse)
VALUES('$klasse');";
mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
/* SQL-setning sendt til database-serveren */
print ("F&oslash;lgende klasse er n&aring; registrert: $klasse");
}
}
}
?>