<?php 
    $path = "/register";
    $pathText = "Regístrate!";
    if(str_contains($_SERVER["REQUEST_URI"], "register")){
        $path = "";
        $pathText = "Iniciar sesión";
    }
?>

<nav class="nav">
    <div class="nav__logo__container">
        Logo
    </div>
    <div class="nav__links_container">
        <ul class="nav__links">
            <li class="nav__item"><a href="<?= BASE_URL . $path; ?>"><?= $pathText ?></a></li>
        </ul>
    </div>
</nav>


<style>
    .nav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .nav__links{
        display: flex;
        gap: 20px;
    }

    .nav__item{
        list-style: none;
    }

    .nav__item a{
        padding: 5px 10px;
        cursor: pointer;
    }


</style>