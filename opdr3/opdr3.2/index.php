<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 25-4-2018
 * Time: 10:42
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        body{
            text-align: center;
        }
        .rood {
            border:solid 5px red;
        }

        .groen {
            border: solid 5px green;
        }
    </style>
</head>
<body>
<?php

for ($i = 1; $i<=9; $i++){
    if($i % 2 == 0) {
        $class = "class ='rood'";
    } else {
        $class= "class='groen'";
    }

    echo "<img " . $class . "src='img/aap" . $i . ".jpg'>";
}

?>
</body>
</html>
