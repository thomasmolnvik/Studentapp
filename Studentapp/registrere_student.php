<?php
<?php /* registrer-student */
/*
/* Programmet lager et html-skjema for å registrere en student
/* Programmet registrerer data i databasen
*/
?>
<h3>Registrer student</h3>
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
Studentnummer <input type="text" id="studentnummer" name="studentnummer" required /> <br/>
Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
Studiumkode <select name="studiumkode" id="studiumkode">
<?php print("<option value=''>velg studium </option>");
include("dynamiske-funksjoner.php"); listeboksStudiumkode(); ?>
</select> <br/>
<input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
if (isset($_POST ["registrerStudentKnapp"]))
{
    $studentnummer = $_POST ["studentnummer"];
    $fornavn = $_POST ["fornavn"];
    $etternavn = $_POST ["etternavn"];
    $studiumkode = $_POST ["studiumkode"];
    if (!$studentnummer || !$fornavn || !$etternavn || !$studiumkode)
    {
        print ("Alle felt m&aring; fylles ut");
    }
    else
    {
        include("db.php"); /* tilkobling til database-serveren utført og valg av database foretatt */
        $sqlSetning = "SELECT * FROM student WHERE studentnummer='$studentnummer';";
        $sqlResultat = mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);
        if ($antallRader != 0) /* studenten er registrert fra før */
        {
            print ("Studenten er registrert fra f&oslashr");
        }
        else
        {
            $sqlSetning = "INSERT INTO student (studentnummer, fornavn, etternavn, studiumkode)
            VALUES('$studentnummer','$fornavn','$etternavn','$studiumkode');";
            mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
            print ("F&oslash;lgende student er n&aring; registrert: $studentnummer $fornavn $etternavn $studiumkode");
        }
    }
}