<?php
<?php /* vis-alle-klasser */
/*
/* Programmet skriver ut alle registrerte klasser
*/
include("db.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="SELECT * FROM klasse ORDER BY klasse;";
$sqlResultat=mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
/* SQL-setning sendt til database-serveren */
$antallRader=mysqli_num_rows($sqlResultat); /* antall rader i resultatet beregnet */
print ("<h3>Registrerte klasser </h3>");
print ("<table border=1>");
print ("<tr><th align=left>klasse</th> <th align=left>klassenavn</th> </tr>");
for ($r=1;$r<=$antallRader;$r++)
{
$rad=mysqli_fetch_array($sqlResultat); /* ny rad hentet fra spørringsresultatet */
$klasse=$rad["klasse"];
$klassenavn=$rad["klassenavn"];
print ("<tr> <td> $klasse </td> <td> $klassenavn </td> </tr>");
}