<?php

require_once($_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . "/classes/Container.php");

class RegisterController{

    private $userModel;

    public function __construct($container){
        $connection = $container->getDatabaseConnection();
        $this->userModel = $container->getUserModel($connection);
    }

    public function registerUser($data){
        try {
           $this->userModel->insert($data);
        } catch (PDOException $error) {
            echo "Error al registrar un nuevo usuario :" . $error;
        }
    }

    private function verifyEnviroment(){
        if(!empty($_POST["btn-register"])){
            if(!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"])){

                $data = [
                    "user_name" => $_POST["username"],
                    "user_email" => $_POST["email"],
                    "user_password" => $_POST["password"]
                ];

                $this->registerUser($data); 
            } else {
                echo "Completa todos los campos";
            }
        }
    }

    public function run(){
        $this->verifyEnviroment();
    }

}

$container = Container::getInstance();
$registerController = new RegisterController($container);