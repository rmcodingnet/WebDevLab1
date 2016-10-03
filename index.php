<?php
$myname = "Rory";
$myage = 20;
$message = "default text";

if($myage > 16) {
    $message = "Specs";
} else if($myage > 18) {
    $message = "Specs and Mugs";
} else if($myage > 21) {
    $message = "Specs, Mugs and Sausage Rolls";
}
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity - Specs, Mugs and Sausage Rolls</title>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<p>Your name is: <?php $myname?> <br>
   Your age is: <?php $myage?> <br>
   Therefore you can purchase:</p>
</body>
</html>
