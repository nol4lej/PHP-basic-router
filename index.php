<?php
    require_once(__DIR__ . "/config.php");
    require_once(__DIR__ . "/router/router.php");
    $router = new Router();
    $title = PAGE_TITLE;


    require_once(__DIR__ . "/classes/database.php");
    $database = new Database();
    $connection = $database->getConnection();

    require_once(__DIR__ . "/classes/ORM.php");
    require_once(__DIR__ . "/classes/Users.php");

    $usuarioModel = new User($connection);
    $usuarios = $usuarioModel->getAll();

    echo "<pre>";
    print_r($usuarios);
    echo "<pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Home" ?></title> <!-- operador de fusión de null (??), verifica si la variable es nula -->
</head>
<body>

    <?php
        $router->run();
    ?>
    
</body>
</html>