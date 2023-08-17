<?php

    $FOLDER_PATH = dirname($_SERVER['SCRIPT_NAME']); // directorio en donde se está ejecutando el script
    $URL_PATH = $_SERVER['REQUEST_URI']; // ruta actual del navegador
    $URL = substr($URL_PATH, strlen($FOLDER_PATH)); // ruta actual corregida
    define("URL", $URL);

    $protocol = isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http";
    $host = $_SERVER["HTTP_HOST"];
    $path = $_SERVER["REQUEST_URI"];
    $full_url = $protocol . ".//" . $host . $path;
    define("FULLURL", $full_url);

    // define('BASE_URL', $full_url = $protocol . ".//" . $host . '/TestingRouter');
    define('BASE_URL', "http://localhost/TestingRouter");