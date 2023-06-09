<?php

$pswlenght = $_GET["Pswlenght"];

function generatorPass($pswlenght) {
    $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz$%&/_()";
    if ($pswlenght <= 0) {
        return "Inserisci la lunghezza";
    }
    return substr(str_shuffle($data), 0, $pswlenght);
}

?>