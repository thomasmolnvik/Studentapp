<?php
$host = getenv("DB_HOST");      // eller f.eks. "localhost"
$username = getenv("DB_USER");  // eller ditt brukernavn
$password = getenv("DB_PASSWORD"); // eller ditt passord
$database = getenv("DB_DATABASE"); // eller databasenavn

$db = mysqli_connect($host, $username, $password, $database) or die ("ikke kontakt med database-server");
/* tilkobling til database-serveren utført */
?>