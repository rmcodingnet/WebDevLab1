<?php
// connect to server and select database
define('DB_SERVER', 'eu-cdbr-azure-north-e.cloudapp.net');
define('DB_USERNAME', 'b69cae8485cbb8');
define('DB_PASSWORD', 'b871ddfb');
define('DB_DATABASE', '1507079db');

$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// test if connection was established and print ant errors
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
} else {
    echo 'Database connection established';
}


//close connection to database
$db->close();
