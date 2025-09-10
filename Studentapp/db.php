<?php
$host = "localhost";   // evt. "mysql"
$user = "root";        // endre om nødvendig
$pass = "";            // endre om nødvendig
$db   = "skole";       // databasenavn

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Feil ved tilkobling: " . $conn->connect_error);
}
?>
