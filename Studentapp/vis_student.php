<?php
/* vis-alle-studenter */
/*
/* Programmet skriver ut alle registrerte studenter
*/
include("db.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
$sqlSetning="SELECT * FROM student ORDER BY studentnummer;";
$sqlResultat=mysqli_query($database,$sqlSetning) or die ("ikke mulig &aring; hente data fra databasen"); /*
SQL-setning sendt til database-serveren */
$antallRader=mysqli_num_rows($sqlResultat); /* antall rader i resultatet beregnet */
print ("<h3>Registrerte studenter </h3>");
print ("<table border=1>");
print ("<tr><th align=left>studentnummer</th> <th align=left>fornavn</th> <th align=left>etternavn</th> <th align=left>klasse</th></tr>");
for ($r=1;$r<=$antallRader;$r++)
{
$rad=mysqli_fetch_array($sqlResultat); /* ny rad hentet fra spørringsresultatet */
$studentnummer=$rad["studentnummer"];
$fornavn=$rad["fornavn"];
$etternavn=$rad["etternavn"];
$klasse=$rad["klasse"];
print ("<tr> <td> $studentnummer </td> <td> $fornavn </td> <td> $etternavn </td> <td> $klasse </td> </tr>");
}
?>