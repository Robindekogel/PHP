<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 15-5-2018
 * Time: 11:37
 */


// print_r($_GET);

if($_POST['voornaam'] == "") {
    echo "Vul je naam in. ";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a><br>";
}


if ($_POST['adres'] == "") {
    echo "Adres is verplicht";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a><br>";
}

if ($_POST['email'] == "") {
    echo "E-mail is verplicht";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a><br>";
}

if ($_POST['wachtwoord'] == "" ) {
    echo "Wachtwoord is verplicht";
    echo "<br><a href=\"formulier.html\">Terug naar formulier</a><br>";
}
