<form method="post">
  Klassekode: <input type="text" name="kode"><br>
  Klassenavn: <input type="text" name="navn"><br>
  Studiumkode: <input type="text" name="studium"><br>
  <input type="submit" value="Lagre">
</form>

<?php
include "db.php";
if($_POST){
  $kode = $_POST['kode'];
  $navn = $_POST['navn'];
  $studium = $_POST['studium'];
  $stmt = $conn->prepare("INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $kode, $navn, $studium);
  $stmt->execute();
  $stmt->close();
  echo "Klasse registrert!";
}
echo "<br><a href='index.php'>Tilbake</a>";
?>