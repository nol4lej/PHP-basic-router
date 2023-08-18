<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . "/controllers/RegisterController.php");
$registerController->run()
?>

<section>
    <form method="post">
        <div class="">
            <label for="">Nombre de usuario:</label>
            <input type="text" name="username">
        </div>
        <div class="">
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="">
            <label for="">Contraseña:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="btn-register" value="btn-register">Registrar </button>
    </form>
</section>
