<?php
/*
    Muss vor dem Gebrauch von $SESSIION

*/
    session_start();

//Hilfswerkzeuge laden
    include 'tools.php';

    if (isset($_POST["lastPageID"])) {
// hole den Nammen der letzten Seite aus $_POST "lastPageID"
    $lastPageID = $_POST["lastPageID"];

// Speichere alle Daten des letzten Posts mit den Namen $lastPageID in der Session
    $_SESSION["$lastPageID"] = $_POST;

    }

//DEVONLY: GIB DIE AKTUELLE $_SESSION in die Seite aus.
    prettyPrint($_SESSION);

?>