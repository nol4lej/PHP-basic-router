<?php

    $FOLDER_PATH = dirname($_SERVER['SCRIPT_NAME']); // directorio en donde se está ejecutando el script
    $URL_PATH = $_SERVER['REQUEST_URI']; // ruta actual del navegador
    $URL = substr($URL_PATH, strlen($FOLDER_PATH)); // ruta actual corregida

    // echo $FOLDER_PATH . "<br>";
    // echo $URL_PATH . "<br>";
    // echo $URL . "<br>";

    define("URL", $URL);
    define('BASE_URL', 'http://localhost/TestingRouter');
