


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

    $plaatsen = array("Aanvaller: 4", "Verdedeging: 2","Keeper: 1");
    $sporten = array("Handbal","Korfbal","Hockey","Schaatsen","Voetbal");

    shuffle($sporten);
    count($sporten);

    echo "<li>Er zijn ".count($sporten)." sporten beschikbaar</li>";
arrayAlsLijst($sporten);
    echo "<li>Hoeveel plaatsen zijn er beschikbaar</li>";
arrayAlsLijst($plaatsen);

    function arrayAlsLijst($al) {
        foreach($al as $al_element){
            echo "<li>".$al_element."</li>";
        }
    }

    ?>
</ul>
</body>
</html>

