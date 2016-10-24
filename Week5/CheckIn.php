<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username = "twat" && $password = "password1") {
    setcookie('access_level', 'standarduser');
} else {
    header("login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check in page</title>
</head>
<body>

</body>
</html>