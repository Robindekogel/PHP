<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 29-5-2018
 * Time: 11:28
 */


if ($_POST["email"] == "piet@wordonline.nl" && $_POST ['wachtwoord'] == "doetje123") {
    echo "welkom";

}elseif ($_POST["email"] == "klass@carpets.nl" && $_POST ['wachtwoord'] == "snoepje777") {
    echo "welkom";
}elseif ($_POST["email"] == "truushendriks@wegweg.nl" && $_POST ['wachtwoord'] == "arkiearkie201") {
    echo "welkom";
} else {
    echo "Sorry geen toegang";
}

?>


