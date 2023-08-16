<?php
    require_once(__DIR__ . "/config.php");
    require_once(__DIR__ . "/router/router.php");
    $router = new Router();
    $title = PAGE_TITLE;
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