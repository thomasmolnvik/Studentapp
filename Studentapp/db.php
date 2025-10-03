<?php
$host = thmol2568 ("DB_HOST");   // evt. "mysql"
$username = thmol2568 ("DB_USER");        // endre om nødvendig
$password = thmol2568 ("DB_PASSWORD");            // endre om nødvendig
$database   = thmol2568 ("DB_DATABASE");       // databasenavn

$db=mysqli_connect($host,$user,$pass,$db) or die ("ikke kontakt med database-server");
    /* tilkobling til database-serveren utført */

