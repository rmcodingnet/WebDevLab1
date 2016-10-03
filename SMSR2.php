<?php
$wantedgood = "mugs";




?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activity - Specs, Mugs and Sausage Rolls II</title>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<p><?php switch ($wantedgood) {
        case "specs":
            echo "You must be over the age of 16 to buy specs";
            break;
        case "mugs":
            echo "You must be over the age of 18 to buy mugs";
            break;
        case "sausageroll":
            echo "You must be over the age of 21 to buy sausagerolls";
            break;
        default:
            echo "You have requested a product that does not exist";
    }?></p>
</body>
</html>