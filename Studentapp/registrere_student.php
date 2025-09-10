<?php
include "db.php";
$res = $conn->query("SELECT klassekode FROM klasse");
?>

<form method="post">
  Brukernavn: <input type="text" name="brukernavn"><br>
  Fornavn: <input type="text" name="fornavn"><br>
  Etternavn: <input type="text" name="etternavn"><br>
  Klassekode: 
  <select name="klassekode">
    <?php while($row = $res->fetch_assoc()){ ?>
      <option value="<?php echo $row['klassekode']; ?>"><?php echo $row['klassekode']; ?></option>
    <?php } ?>
  </select><br>
  <input type="submit" value="Lagre">
</form>
<?php
if($_POST){
  $bn = $_POST['brukernavn'];
  $fn = $_POST['fornavn'];
  $en = $_POST['etternavn'];
  $kk = $_POST['klassekode'];
  $stmt = $conn->prepare("INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $bn, $fn, $en, $kk);
  if ($stmt->execute()) {
    echo "Student registrert!";
  } else {
    echo "Feil ved registrering: " . $stmt->error;
  }
  $stmt->close();
}
echo "<br><a href='index.php'>Tilbake</a>";
?>