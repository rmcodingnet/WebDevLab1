<?php

$planet = $_GET["planet"];

if (!$planet) {
    header("helloSelector.php");
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Hello World 2.0</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">


    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<?php
echo "<p>Hello {$planet}</p>";
?>
</body>
</html>
