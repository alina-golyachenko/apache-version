<?php
//echo "hi <3"
//?>
<!--<!DOCTYPE html>-->
<!--    <html lang="en">-->
<!--    <head>-->
<!--        <link rel="stylesheet" href="CSS/main.css">-->
<!--        <meta charset="UTF-8">-->
<!--        <title>Witch's kitchen</title>-->
<!--    </head>-->
<!--    <body>-->
<!--    <img src="Files/Images/apple%20pie.jpg">-->
<!--    </body>-->
<!--    </html>-->
<?php

include('Config/config.php');
include('Core/Core.php');

$core = \Core\Core::getInstance();
$core -> init();
$core -> run();
$core -> done();

?>