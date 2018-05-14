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
        img {
            width: 25px;
            height:25px;
        }
    </style>
</head>
<body>
<?php
$club = array();
$club[0] = 25;
$club[1] = 32;
$club[2] = 12;
$club[3] = 23;
$zwemclub = "Zwemclub ";




echo "<ul>";

$i = 1;
$b = 0;
foreach ($club as $clb) {
    echo "<li>" . $zwemclub . $i . " | leden: " . $clb;
    $i++;

    for ($a = $club[$b]; $a > 0 ; $a -= 5) {
        if ($a < 5){
            break;
        } else {
            echo "<img src='img/Zwemicon.png'>'";
        }
    }
    $b++;

}

echo "</ul>";


?>


</body>
</html>


