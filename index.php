<?php
    require_once(__DIR__ . "/config.php");
    require_once(__DIR__ . "/router/router.php");
    require_once(__DIR__ . "/classes/ORM.php");
    require_once(__DIR__ . "/classes/Container.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

    <?php
        $router = new Router();
        $router->run();
    ?>
    
</body>
</html>