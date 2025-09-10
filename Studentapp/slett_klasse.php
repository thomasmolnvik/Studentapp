<?php
include "db.php";
$res = $conn->query("SELECT klassekode FROM klasse");
?>

<form method="post">
  Velg klasse: 
  <select name="kode">
    <?php while($row = $res->fetch_assoc()){ ?>
      <option value="<?php echo $row['klassekode']; ?>"><?php echo $row['klassekode']; ?></option>
    <?php } ?>
  </select>
  <input type="submit" value="Slett">
</form>

<?php
if($_POST){
  $kode = $_POST['kode'];
  $stmt = $conn->prepare("DELETE FROM klasse WHERE klassekode = ?");
  $stmt->bind_param("s", $kode);
  $stmt->execute();
  $stmt->close();
  echo "Klasse slettet!";
}
echo "<br><a href='index.php'>Tilbake</a>";
?>