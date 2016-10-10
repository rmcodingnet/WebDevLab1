<?php
// connect to server and select database

$db = new mysqli('eu-cdbr-azure-north-e.cloudapp.net',
    'b69cae8485cbb8',
    'b871ddfb',
    '1507079db');

// test if connection was established and print ant errors
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
} else {
    echo 'Database connection established';
}


//close connection to database
$db->close();
