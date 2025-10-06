
<h3>Registrer student</h3>
<form method="post" action="" id="registrerStudentSkjema" name="registrerStudentSkjema">
Studentnummer <input type="text" id="studentnummer" name="studentnummer" required /> <br/>
Fornavn <input type="text" id="fornavn" name="fornavn" required /> <br/>
Etternavn <input type="text" id="etternavn" name="etternavn" required /> <br/>
<input type="submit" value="Registrer student" id="registrerStudentKnapp" name="registrerStudentKnapp" />
<input type="reset" value="Nullstill" id="nullstill" name="nullstill" /> <br />
</form>
<?php
if (isset($_POST ["registrerStudentKnapp"]))
{
    $studentnummer = $_POST ["studentnummer"];
    $fornavn = $_POST ["fornavn"];
    $etternavn = $_POST ["etternavn"];
    if (!$studentnummer || !$fornavn || !$etternavn)
    {
        print ("Alle felt m&aring; fylles ut");
    }
    else
    {
        include("db.php");
        $sqlSetning = "SELECT * FROM student WHERE studentnummer='$studentnummer';";
        $sqlResultat = mysqli_query($datanase, $sqlSetning) or die ("ikke mulig &aring; hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);
        if ($antallRader != 0)
        {
            print ("Studenten er registrert fra f&oslash;r");
        }
        else
        {
            $sqlSetning = "INSERT INTO student (studentnummer, fornavn, etternavn)
            VALUES('$studentnummer','$fornavn','$etternavn');";
            mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; registrere data i databasen");
            print ("F&oslash;lgende student er n&aring; registrert: $studentnummer $fornavn $etternavn");
        }
    }
}
?>