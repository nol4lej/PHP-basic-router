<title>Register</title>

<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . "/controllers/RegisterController.php");
$registerController->run()
?>

<?php require_once(dirname(__DIR__) . "/../components/Nav/Nav.php") ?>

<section class="main__register">
    <div class="main__register__left">

    </div>
    <div class="main__register__right">
        <h2>Registrar nuevo usuario</h2>
        <form method="post" class="form__register">
            <div class="form__input__container">
                <label for="">Nombre de usuario:</label>
                <input type="text" name="username">
            </div>
            <div class="form__input__container">
                <label for="">Email:</label>
                <input type="email" name="email">
            </div>
            <div class="form__input__container">
                <label for="">Contraseña:</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="btn-register" value="btn-register">Registrar </button>
        </form>
    </div>

</section>











<style>
    .main__register{
        display: flex;
        border: 1px solid red;
        height: 100vh;
    }

    .main__register__left{
        display: none;
    }

    .main__register__right{
        margin: auto;
        width: 80%;
    }

    .form__register{
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