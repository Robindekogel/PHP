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
</head>
<style>
    body {
        text-align: center;
    }
</style>
<body>
<?php

for($i = 0; $i<=40; $i++ ) {
    for($j = 0; $j<$i; $j++) {
        echo "*";
    }
    echo "*<br>";

}

?>

</body>
</html>
