<?php
// Database settings
// database hostname or IP. default:localhost
// localhost will be correct for 99% of times
define("HOST", "localhost");
// Database user
define("DBUSER", "root");
// Database password
define("PASS", "root");
// Database name
define("DB", "db_test");
 
############## Make the mysql connection ###########
$conn = mysqli_connect(HOST, DBUSER, PASS,DB);
if (!$conn)
{
    // the connection failed so quit the script
    die('Could not connect !<br />Please contact the site\'s administrator.');
}
$db = mysqli_select_db($conn,DB);
if (!$db)
{
    // cannot connect to the database so quit the script
    die('Could not connect to database !<br />Please contact the site\'s administrator.');
}
?>