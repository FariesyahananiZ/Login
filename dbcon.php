<?php
/* Database config */
$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = '';
$db_database    = 'steakHouse'; 
/* End config */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
/* check connection */
if (mysqli_connect_errno()) 
{printf("Connect failed: %s\n", mysqli_connect_error());
}

?>