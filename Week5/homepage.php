<?php
$accesslevel = $_COOKIE['access_level'];

?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<head>
    <title>Title</title>
</head>
<body>
<?php
if($accesslevel = "standarduser") {
    echo '<p>OH LOOK A STANDARD USER</p>';
} elseif($accesslevel = "root") {
   echo "<p>OH LOOK THE ROOT NOW YOU HAVE ACCESS TO EVERYTHING ISN'T THAT FUN?!?!?!?!?!?!</p>";
} else {
    echo "<p>HOW THE HELL DID YOU EVEN GET HERE?</p>";
}
?>
</body>
</html>