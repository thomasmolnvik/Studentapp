<?php
include "db.php";
$res = $conn->query("SELECT brukernavn FROM student");
?>

<form method="post">
  Velg student: 
  <select name="brukernavn">
    <?php while($row = $res->fetch_assoc()){ ?>
      <option value="<?php echo $row['brukernavn']; ?>"><?php echo $row['brukernavn']; ?></option>
    <?php } ?>
  </select>
  <input type="submit" value="Slett">
</form>

<?php
if($_POST){
  $bn = $_POST['brukernavn'];
  $stmt = $conn->prepare("DELETE FROM student WHERE brukernavn = ?");
  $stmt->bind_param("s", $bn);
  $stmt->execute();
  $stmt->close();
  echo "Student slettet!";
}
echo "<br><a href='index.php'>Tilbake</a>";
?>