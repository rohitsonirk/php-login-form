<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'logins');

// try connecting to database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD ,DB_NAME);

//CHECK THE CONNCTION
if($conn == false) {
    dir('error: can not connect');
}

?>