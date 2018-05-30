<?php
/**
 * Created by PhpStorm.
 * User: Robin
 * Date: 29-5-2018
 * Time: 11:28
 */



function gegevens(){
    if ($_POST["email"] == "piet@wordonline.nl" && $_POST ['wachtwoord'] == "doetje123") {
        return true;
    }elseif ($_POST["email"] == "klass@carpets.nl" && $_POST ['wachtwoord'] == "snoepje777") {
        return true;
    }elseif ($_POST["email"] == "truushendriks@wegweg.nl" && $_POST ['wachtwoord'] == "arkiearkie201") {
        return true;
    } else {
        return false;
    }
}


?>


