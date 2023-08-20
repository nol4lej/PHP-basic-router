<?php

require_once($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . "/classes/Container.php");

class LoginController{

    private $userModel;

    public function __construct($container){
        $connection = $container->getDatabaseConnection();
        $this->userModel = $container->getUserModel($connection);
    }

    private function verifyLogin($data){
        ["login" => $login, "password" => $password] = $data;
        try {
            $res = $this->userModel->loginByEmailAndUser($login, $password);
            var_dump($res);
        } catch (PDOException $error) {
            echo $error;
        }
        
    }

    private function validateInput(){
        if(isset($_POST["btn-login"])){
            if(!empty($_POST["login-user"]) && !empty($_POST["login-password"])){

                $data = [
                    "login" => trim($_POST["login-user"]),
                    "password" => trim($_POST["login-password"])
                ];

                $this->verifyLogin($data);

            } else {
                echo "Debe completar los campos.";
            }
        }
    }

    public function run(){
        $this->validateInput();
    }


}

$container = Container::getInstance();
$loginController = new LoginController($container);