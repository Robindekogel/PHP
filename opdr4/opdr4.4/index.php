
<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
    </style>
</head>
<body>
<?php
function convCf ($c) {
    $uitkomst = $c * 1.8 + 32;
    return $uitkomst. " Fahrenheit.";
}
echo convCf(0);
echo '<br>';

function deelbaar($g) {
    if (($g % 3) === 0) {
        return true;
    } else {
        return false;
    }
}
echo deelbaar(9);
echo '<br>';
function testkOmgekeerd($t) {
    return strrev ( $t);
}

echo testkOmgekeerd("ROC Dev");
echo '<br>';

?>
</body>
</html>
