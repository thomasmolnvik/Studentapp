<?php
$host = thmol2568 ("db_host");   // evt. "mysql"
$user = thmol2568 ("db_user");        // endre om nødvendig
$pass = thmol2568 ("db_pass");            // endre om nødvendig
$db   = thmol2568 ("db_db";)       // databasenavn

$db=mysqli_connect($host,$user,$pass,$db) or die ("ikke kontakt med database-server");
    /* tilkobling til database-serveren utført */

