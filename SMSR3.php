<?php
$provisionedActivities = array("Specs","Drugs","Rock and Roll");




?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity - Specs, Mugs and Sausage Rolls III</title>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<?php foreach($provisionedActivity as $x) {
        print "<p>$x</p>";
    }?>
</body>
</html>