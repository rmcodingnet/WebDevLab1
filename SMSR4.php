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
<?php
$productsAvailable = "On Day ";
for ($i = 0; $i < 30; $i++)
{
    $productsAvailable = $productsAvailable + strval($i);
    $specs = ($i % 2);
    $mugs = ($i % 3);
    $sausageroll = ($i % 4);
    $productsAvailable = strval($productsAvailable) + " of the month";
    if($specs == 0 && $mugs == 0 && $sausageroll == 0) {
        $productsAvailable = strval($productsAvailable) + "Specs, Mugs and Sausage rolls are available";
    } elseif($specs == 0) {
        $productsAvailable = strval($productsAvailable) + "Specs are available";
    } elseif($mugs == 0) {
        $productsAvailable = strval($productsAvailable) + "Mugs are available";
    } elseif($sausageroll == 0) {
        $productsAvailable = strval($productsAvailable) + "Sausage rolls are available";
    } elseif($specs == 0 && $mugs == 0 && $sausageroll != 0) {
        $productsAvailable = strval($productsAvailable) + "Specs and Mugs are available";
    } elseif($specs != 0 && $mugs == 0 && $sausageroll == 0){
        $productsAvailable = strval($productsAvailable) + "Mugs and Sausagerolls are available";
    } elseif ($specs == 0 && $mugs != 0 && $sausageroll == 0) {
        $productsAvailable = strval($productsAvailable) + "Specs and Sausagerolls are available";
    } else {
        $productsAvailable = strval($productsAvailable) + "No products are available";
    }
    echo strval($productsAvailable);
}

//foreach($provisionedActivities as $x)
//{
//    print "<p>$x</p>";
//}
?>
</body>
</html>