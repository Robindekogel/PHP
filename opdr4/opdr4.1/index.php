


<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>

        li {
            font-size: 25px;
            font-family: monospace;
        }

    </style>
</head>
<body>
<ul>
<?php

$sporten = array("Handbal","Korfbal","Hockey","Schaatsen","Voetbal");
  shuffle($sporten);
  count($sporten);
    echo "<li>Er zijn ".count($sporten)." sporten beschikbaar</li>";

foreach($sporten as $sport){
    echo "<li>".$sport."</li>";
 }

?>
</ul>
</body>
</html>

