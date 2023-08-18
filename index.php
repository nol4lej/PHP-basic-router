<?php
    require_once(__DIR__ . "/config.php");
    require_once(__DIR__ . "/router/router.php");
    require_once(__DIR__ . "/classes/ORM.php");
    require_once(__DIR__ . "/classes/Container.php");
    // echo "FULL RUTA: " . FULLURL . "<br>-----<br>";
    $router = new Router();
    $title = PAGE_TITLE;

    // $container = new Container();
    

    // $connection = $container->getDatabaseConnection();
    // $userModel = $container->getUserModel($connection);

    


    // $database = new Database();
    // $connection = $database->getConnection();


    // $usuarioModel = new User($connection);
    // $usuarios = $usuarioModel->getAll();

    // echo "<pre>";
    // print_r($usuarios);
    // echo "<pre>";

    // $productModel = new Products($connection);

    // $productos = $productModel->getAll();
    // echo "<pre>";
    // print_r($productos);
    // echo "<pre>";

    // $productoById = $productModel->getById("prod", 1);
    // echo "<pre>";
    // print_r($productoById);
    // echo "<pre>";

    // $usuarioModel->updateById("user", 1, [
    //     "user_name" => "administrador",
    //     "user_email" => "admin@admin.com"
    // ]);

    // $usuarios = $usuarioModel->getAll();
    // echo "<pre>";
    // print_r($usuarios);
    // echo "<pre>";

    // $usuarioModel->insert([
    //     "user_name" => "test2",
    //     "user_email" => "test2@test.com",
    //     "user_password" => "test2"
    // ]);

    // $usuarios = $usuarioModel->getAll();
    // echo "<pre>";
    // print_r($usuarios);
    // echo "<pre>";

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