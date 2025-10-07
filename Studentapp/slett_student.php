<?php
/* slett-student */
?>
<script src="funksjoner.js"> </script>
<h3>Slett student</h3>
<form method="post" action="" id="slettStudentSkjema" name="slettStudentSkjema" onSubmit="return bekreft()">
Student <select name="student" id="student">
<?php print("<option value=''>velg student </option>");
include("dynamiske-funksjoner.php"); listeboksStudentnummer(); ?>
</select> <br/>
<input type="submit" value="Slett student" name="slettStudentKnapp" id="slettStudentKnapp" />
</form>
<?php
if (isset($_POST ["slettStudentKnapp"]))
{
    $student = $_POST ["student"];
    if (!$student)
    {
        print ("Det er ikke valgt noen student");
    }
    else
    {
        include("db.php");
        $sqlSetning = "DELETE FROM student WHERE brukernavn='$student';";
        mysqli_query($db, $sqlSetning) or die ("ikke mulig &aring; slette data i databasen");
        print ("F&oslash;lgende student er n&aring; slettet: $student <br />");
    }
}
?>