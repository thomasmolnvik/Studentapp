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
    