<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'I21xauur7t');
define('DB_PASSWORD', 'GaABKRicdV');
define('DB_NAME', 'I21xauur7t');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>




