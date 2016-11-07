<?PHP
// connect to your Azure server and select database (remember you connection details are all on the azure portal
$db = new mysqli(
    "eu-cdbr-azure-north-e.cloudapp.net",
    "b69cae8485cbb8",
    "b871ddfb",
    "1507079db" );

// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}
?>