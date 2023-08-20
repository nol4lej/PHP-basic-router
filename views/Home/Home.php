<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . "/controllers/LoginController.php");
$loginController->run()
?>

<title>Home</title>
<?php require_once(dirname(__DIR__) . "/../components/Nav/Nav.php") ?>
<main class="main">
    <div class="main__left">
    </div>
    <div class="main__right">
        <h2>Inicio de sesión</h2>
        <form method="POST" class="form__login">
            <div class="form__input__container">
                <label for="">Dirección de email o usuario:</label>
                <input type="text" name="login-user">
            </div>
            <div class="form__input__container">
                <label for="">Contraseña:</label>
                <input type="password" name="login-password">
            </div>
            <button type="submit" name="btn-login" value="btn-login">Iniciar sesión</button>
        </form>
    </div>
</main>














<style>
    .main{
        display: flex;
        border: 1px solid red;
        height: 100vh;
    }

    .main__left{
        display: none;
    }

    .main__right{
        margin: auto;
        width: 80%;
    }

    .form__login{
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .form__input__container{
        display: flex;
        flex-direction: column;
        gap: 5px;
    }
</style>